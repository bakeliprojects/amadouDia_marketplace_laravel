@extends('main_layout')
@section('titre')
    Produit
@stop

@section('content')




<div class="paragraphs">
  <div class="row">
    <div class="span4" style="padding-left:150px;">
      <img style="float:left" src="{{url('images/'.$produit->filePath)}}" alt="Shopify Welcome" width="300px" height="300px"/>
        <div class="content-heading"><h3 style="color:red;"> {!! $produit->title!!} </h3></div>
        <div class="content-heading"><h3>Prix {!! $produit->prix!!} </h3></div>
        <div class="content-heading"><h3> {!! $produit->description!!} </h3></div>
        <div class="content-heading"><h3>Vendeur: {!! $produit->user->name!!}</h3> </div>
        
    </div>
  </div>
</div>


@stop