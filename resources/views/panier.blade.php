@extends('main_layout')

@section('content')

<div class="container" style="width:60%">
  <h1>Votre Panier</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
          <th>
          <b>Photo</b>
        </th>
        <th>
          <b>Title</b>
        </th>
        <th>
          <b>Nombre</b>
        </th>
        <th>
          <b>Prix</b>
        </th>
        <th>
          <b>Total</b>
        </th>
        <th>
          Action
        </th>
      </tr>
      </thead>
      <tbody>
      @foreach($cart_produits as $cart_item)
        <tr>
        <td>
                     <a ><img src="{{url('images/'.$cart_item->Books->filePath)}}"  width="50px" height="50px"></a>
          </td>
          <td>
              {{$cart_item->Books->title}}
          </td>
          <td>
           {{$cart_item->montant}}
          </td>
          <td>
            {{$cart_item->Books->prix}}
          </td>
          <td>
           {{$cart_item->total}}
          </td>
          <td>
            <a href="{{URL::route('delete_book_from_cart',array($cart_item->id))}}">Supprimer</a>
          </td>
        </tr>
      @endforeach

    </tbody>
    <tbody>
          <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
          <b>Total</b>
        </td>
        <td>
          <b>{{$cart_total}}</b>
        </td>
        <td>
        </td>        
      </tr>  
    </tbody>
  </table>
  <h1>Commander</h1>
  <form action="order" method="post" accept-charset="UTF-8">
       {{ csrf_field() }}
    <label>Address</label>
    <textarea class="span4" name="address" rows="3"></textarea>
    <button class="btn btn-block btn-primary btn-large">Acheter</button>
  </form>
<div class="alert-warning">
            @foreach( $errors->all() as $error )
               <br> {{ $error }}
            @endforeach
        </div>
</div>
@stop