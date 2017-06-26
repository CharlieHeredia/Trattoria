@extends('layouts.app')
@section('content')
<div class="container">
  {!!Form::open(['url' => '/products/', 'method' => 'POST', 'class' => 'inline-block']) !!}
    Nombre del producto:
    {{ Form::text('name','',['class'=>'form-control'])   }}

    Descripción del producto:
    {{ Form::textarea('description','',['class'=>'form-control'])   }}

    Precio del producto:
    {{ Form::text('price','',['class'=>'form-control'])   }}

    Categoría del producto:
    {{ Form::select('category_id',$categories,['class'=>'form-control'])   }}
    <br>
    <a href="{{url('/products')}}" class="btn btn-danger">Cancelar</a>
    <input type="submit" class="btn btn-success" value="Guardar">
  {!! Form::close() !!}
</div>

@endsection
