@extends('main_layout')
@section('titre')
    Produit
@stop

@section('content')

<div class="thumnails">
<div class="row" style="padding-left: 100px;">
    @foreach( $produitUser as $produit )
    <div class="portofolio-item col-sm-3 col-xs-6" style="padding-left: 100;">
       <figure>       
        <a href="{{action('ProduitController@show', ['id'=>$produit->id])}}"><img src="{{url('images/'.$produit->filePath)}}" alt="Shopify Welcome" width="300px" height="350px" ></a>
            <figcaption>Prix {!! $produit->prix!!}</figcaption>
           <span>  </span>
        <p align="center">
           {{ Form::open(['method' => 'DELETE', 'route' => ['userproduit.destroy', $produit->id, 'onsubmit' => 'return ConfirmDelete()']]) }}
                {{ Form::hidden('id', $produit->id) }}
                <input class="btn btn-danger col-xs-8" type="submit" value="Supprimer" />
        {{ Form::close() }}
           </p>

         </figure>

        

        
                
    </div>
    @endforeach
</div>
</div>
@stop



