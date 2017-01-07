@extends('main_layout')
@section('titre')
    Produit
@stop

@section('content')

<div class="row" style="padding-left: 100px;">
    @foreach( $produits as $produit )
    <div class="portofolio-item col-sm-3 col-xs-6" style="padding-left: 100;">
                
        <a ><img src="{{url('images/'.$produit->filePath)}}" alt="Shopify Welcome" width="300px" height="300px" ></a>
                
      <form action="ajoutchariot" name="add_to_cart" method="post" accept-charset="UTF-8">
                {{ csrf_field() }}
                <input type="hidden" name="produit" value="{!!$produit->id!!}" />
                <select name="montant" style="width: 100%;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              <p align="center"><button class="btn btn-info btn-block">Add to Cart</button></p>
            </form>          {!! $produit->prix!!}  
                
    </div>
    @endforeach
</div>
@stop


