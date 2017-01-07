<?php

namespace App\Http\Controllers;
use App\Produit;
use App\Http\Requests\ProduitRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProduitController extends Controller
{
    public function index()
  {

    $produits = Produit::all();

     return view('index', compact('produits'));

  }
    public function store(ProduitRequest $request)
    {
	   {
        Auth::user();
        $image = new Produit(); // on recupere tous les champs de la table produit
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'type'=> 'required',
            'prix'=> 'required'
        ]);
        
        $image->user_id = Auth::user()->id;
        $image->title = $request->title;
        $image->description = $request->description;
        $image->type= $request['type'];
        $image->prix= $request['prix'];
		if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            $name = $timestamp. '-' .$file->getClientOriginalName();
            
            $image->filePath = $name;

            $file->move(public_path().'/images/', $name);
        }
        $image->save();
        return $this->create()->with('success', 'Image Uploaded Successfully');
	}}
    
         public function create()
        {
            if(Auth::check()){
            return view('list_produit');
            }
            else {
                return view('index');
            }


        }
    
             public function afficheOrdinateur()
        {
            
            $allOrdis = DB::table('produits')
            ->select( DB::raw('*'))
            ->where('type','=', 'ordinateur')
            ->get();
            return view('list_ordi', compact('allOrdis'));

        }
    
        public function afficheTelephone()
        {
            
            $allTels = DB::table('produits')
            ->select( DB::raw('*'))
            ->where('type','=', 'telephone')
            ->get();
            return view('list_tels', compact('allTels'));

        }
    
        public function afficheTeleviseur()
        {
            
            $allTeles = DB::table('produits')
            ->select( DB::raw('*'))
            ->where('type','=', 'televiseur')
            ->get();
            return view('list_tele', compact('allTeles'));

        }
    
        public function search(Request $request)
        {
           // $query = Request::input('search');
            $query =  $request->input('search');
            $articles = DB::table('produits')
            ->select( DB::raw('*'))
            ->where('title','=', $query)
            ->get();
            return view('search', compact('articles', 'query'));

        }
    
}

