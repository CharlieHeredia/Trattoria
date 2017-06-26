@extends('layouts.app')
@section('content')
<div class="container">
  {!!Form::open(['url' => '/categories/'.$category->id, 'method' => 'PATCH', 'class' => 'inline-block', 'files' => true]) !!}

    Nombre de la categoria:
    {{ Form::text('name',$category->name,['class'=>'form-control'])   }}

    descripción del producto:
    {{ Form::textarea('description',$category->description,['class'=>'form-control'])   }}
    <a href="/categories" class="btn btn-danger">Cancelar</a>
    <input type="submit" name="" class="btn btn-success" value="Guardar">
  {!! Form::close() !!}
</div>


@endsection
