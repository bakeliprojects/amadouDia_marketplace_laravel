@extends('main_layout')
@section('titre')
    Ajout produit
@stop

@section('content')
@if (count($articles) === 0)
 Pas de resultat trouve
@elseif (count($articles) >= 1)

    @foreach($articles as $article)
        <div class="item active" id="tf-home">
            <div class="view overlay hm-blue-slight">
        <!-- First slide -->

                <a><img src="{{url('images/'.$article->filePath)}}" alt="Shopify Welcome">
                    <div class="mask waves-effect waves-light"></div>
                </a>
                {!! $article->type!!}
                {!! $article->description!!}
            </div>
        </div>
   
    @endforeach
@endif
@stop