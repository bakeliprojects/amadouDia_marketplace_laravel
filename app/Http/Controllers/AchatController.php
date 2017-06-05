<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    $this->validate($request, [
            'address' => 'required'
        ]);

 
      Auth::user();
      $user_id = Auth::user()->id;
    //  $address = Input::get('address');
       $address =  $request->input('address');

       $cart_produits = Chariot::with('Books')->where('user_id','=',$user_id)->get();

       $cart_total=Chariot::with('Books')->where('user_id','=',$user_id)->sum('total');

       if(count($cart_produits) === 0){

         return Redirect::route('index')->with('error','Your cart is empty.');
       }
      
      $order = Order::create(
        array(
        'user_id'=>$user_id,
        'address'=>$address,
        'total'=>$cart_total
        ));

      foreach ($cart_produits as $order_produit) {
        
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
