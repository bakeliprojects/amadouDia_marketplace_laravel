@extends('main_layout')
@section('titre')
    Ajout produit
@stop

@section('content')

    
    <div class="container">
      <div class="col-md-6 col-md-offset-3" style="padding-top: 50px; padding-right: 75px; padding-left: 10px;">
          <h1 class="well well-lg">Ajout de produit</h1>
    @if(isset($success))
        <div class="alert alert-success"> {{$success}} </div>
    @endif
        {!! Form::open(['action'=>'ProduitController@store', 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>5] ) !!}
        </div>

        <div class="form-group">
            {!! Form::label('image', 'Choose an image') !!}
            {!! Form::file('image') !!}
        </div>
        <div class="form-group">
            {!! Form::label('type', 'Choisir le type de Produit : ') !!}
            {!!Form::select('type',  array('ordinateur' => 'Ordinateur','telephone' => 'Telephone','televiseur' => 'Televiseur',  ) )!!}
  
            {!! $errors->first('type', '<small class="help-block">:message</small>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('prix', 'Prix:') !!}
            {!! Form::text('prix', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Save', array( 'class'=>'btn  btn-info form-control' )) !!}
        </div>
         

        {!! Form::close() !!}
        <div class="alert-warning">
            @foreach( $errors->all() as $error )
               <br> {{ $error }}
            @endforeach
        </div>
        </div>
    </div>
@stop
