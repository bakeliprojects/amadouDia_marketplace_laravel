<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Validator;
use Illuminate\Support\Facades\Auth;
use App\Chariot;
use App\Produit;
use App\User;
use App\Order;
class CommandeController extends Controller
{
    
    
     public function store(Request $request)
  {
    $rules=array(

      'address'=>'required'
    );

 
      Auth::user();
      $user_id = Auth::user()->id;
    //  $address = Input::get('address');
       $address =  $request->input('address');

       $cart_produits = Chariot::with('Books')->where('user_id','=',$user_id)->get();

       $cart_total=Chariot::with('Books')->where('user_id','=',$user_id)->sum('total');

       if(!$cart_produits){

         return Redirect::route('index')->with('error','Your cart is empty.');
       }

      $order = Order::create(
        array(
        'user_id'=>$user_id,
        'address'=>$address,
        'total'=>$cart_total
        ));

      foreach ($cart_produits as $order_produit) {
         // dd($cart_produits);
        //  $order_produit->amount;
     //dd($order_produit->Books->prix);
         // $order->orderItems()->attach($order_produit->produit_id);
          $order->orderItems()->attach($order_produit->produit_id, array(
          'amount'=>$order_produit->montant,
          'prix'=>$order_produit->Books->prix,
          'total'=>$cart_total
          ));

      }
      
      Chariot::where('user_id','=',$user_id)->delete();
      return redirect('/')->with('message','Your order processed successfully.');
      //return Redirect::route('/')->with('message','Your order processed successfully.');
  }


  public function index(){
      Auth::user();
    $user_id = Auth::user()->id;

    if(Auth::user()->admin){

      $orders=Order::all();

    }else{

      $orders=Order::with('orderItems')->where('user_id','=',$user_id)->get();
    }

    if(!$orders){

      return Redirect::route('index')->with('error','There is no order.');
    }
    
    return View::make('order')
          ->with('orders', $orders);
  }
}

