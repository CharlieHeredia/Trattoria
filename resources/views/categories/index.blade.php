@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-4">
    <a href="{{url('/home')}}" class="btn btn-success">Home</a>
    <a href="{{url('/categories/create')}}" class="btn btn-primary">Crear categoria</a>
  </div>
</div>
<div class="container">
  @foreach($categories as $category)
    <div class="col-md-4">
        <h3>{{$category->name}}</h3>
        <p>{{$category->description}}</p>

        {!!Form::open(['url' => '/categories/'.$category->id, 'method' => 'POST', 'class' => 'inline-block']) !!}
          <a onclick ="eliminarCategoria({{$category->id}})"class="btn btn-danger">Eliminar</a>
          <a href="{{url('/categories/'.$category->id.'/edit')}}" class="btn btn-primary">Editar</a>
        {!! Form::close() !!}

    </div>

  @endforeach
  <div class="col-xs-12">
    {{ $categories->links() }}
  </div>
</div>
@endsection
