<?php

namespace App\Http\Controllers;

use App\Chariot;
use App\Produit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

//use App\Http\Controllers\Validator;


class ChariotController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            Auth::user();
            $chariot = new Chariot;
            $user_id = Auth::user()->id;
            //$chariot->produit_id = $request->input('produits');
            //$chariot->amount = $request->input('montant');
            // $amount = Input::get('montant');
            $produit_id = $request->input('produit');
            $montant = $request->input('montant');
            //$produit_id = Input::get('produit');
            $produit = Produit::find($produit_id);
            $total = $montant * $produit->prix;


            $count = Chariot::where('produit_id', '=', $produit_id)->where('user_id', '=', $user_id)->count();

            if ($count) {

                return 'The book already in your cart.';
            }

            Chariot::create(
                array(
                    'user_id' => $user_id,
                    'produit_id' => $produit_id,
                    'montant' => $montant,
                    'total' => $total
                ));

            return redirect('/');
        } else {
            return view('auth/login');
        }
    }


    public function index()
    {

        $user_id = Auth::user()->id;

        $cart_produits = Chariot::with('Books')->where('user_id', '=', $user_id)->get();


        $cart_total = Chariot::with('Books')->where('user_id', '=', $user_id)->sum('total');

        if (!$cart_produits) {

            return Redirect::route('index')->with('error', 'Your cart is empty');
        }

        return view('panier', compact('cart_produits', 'cart_total'));


    }


    public function delete($id)
    {

        $cart = Chariot::find($id)->delete();
        return redirect('chariot');
    }

}

