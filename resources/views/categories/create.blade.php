@extends('layouts.app')
@section('content')
<div class="container">
  {!!Form::open(['url' => '/categories/', 'method' => 'POST', 'class' => 'inline-block']) !!}
    Nombre de la categoría
    {{ Form::text('name','',['class'=>'form-control'])   }}

    Descripción del producto:
    {{ Form::textarea('description','',['class'=>'form-control'])   }}

    <br>
    <a href="{{url('/categories')}}" class="btn btn-danger">Cancelar</a>
    <input type="submit" class="btn btn-success" value="Guardar">
  {!!Form::close() !!}
</div>
@endsection
