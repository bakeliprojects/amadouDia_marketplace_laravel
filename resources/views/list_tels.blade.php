@extends('main_layout')
@section('titre')
    Produit
@stop

@section('content')

<h1 class="well well-lg">Choisissez votre telephone</h1>
<div class="row" style="padding-left: 100px;">
    @foreach( $allTels as $tel )
          <div class="portofolio-item col-sm-3 col-xs-6" >

        <figure>       
        <a href="{{action('ProduitController@show', ['id'=>$tel->id])}}"><img src="{{url('images/'.$tel->filePath)}}" alt="Shopify Welcome" width="300px" height="350px" ></a>
            <figcaption>Prix {!! $tel->prix!!}</figcaption>
           <span>  </span>
         </figure>
              
        
              
                <form action="ajoutchariot" name="add_to_cart" method="post" accept-charset="UTF-8">
                {{ csrf_field() }}
                <input type="hidden" name="produit" value="{!!$tel->id!!}" />
                <select name="montant" style="width: 100%;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              <p align="center"><button class="btn btn-info btn-block">Add to Cart</button></p>
            </form>
             
        </div>    
    @endforeach

</div>

  
@stop