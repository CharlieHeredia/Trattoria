@extends('layouts.app')
@section('content')
<div class="container">
  {!!Form::open(['url' => '/products/'.$product->id, 'method' => 'PATCH', 'class' => 'inline-block', 'files' => true]) !!}
    Imagen del producto:
    {!! Form::file('image') !!}
    Nombre del producto:
    {{ Form::text('name',$product->name,['class'=>'form-control'])   }}

    descripción del producto:
    {{ Form::textarea('description',$product->description,['class'=>'form-control'])   }}

    Precio del producto:
    {{ Form::text('price',$product->price,['class'=>'form-control'])   }}

    Categoría del producto:
    {{ Form::select('category_id',$categories,['class'=>'form-control'])   }}
    <br>
    <a href="/products" class="btn btn-danger">Cancelar</a>
    <input type="submit" class="btn btn-success" value="Guardar">
    <br>
    <br>
  {!! Form::close() !!}
</div>



@endsection
