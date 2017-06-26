@extends('layouts.app')

@section('content')

  @if( Auth::user()->admin() )

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Bienvenido!!</div>

          <div class="panel-body">
              You are logged in as Admin!
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="text-align: center;">
      <a href="{{url('/categories')}}" class="btn btn-success">Categorias</a>
      <a href="{{url('/products')}}" class="btn btn-success">Productos</a>
      <a href="{{url('/Pendiente')}}" class="btn btn-info">Pedidos pendientes</a>
      <a href="#" class="btn btn-primary">Pedidos completados</a>
    </div>
    @else
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Bienvenido !!</div>

          <div class="panel-body">
              {!!Form::open(['url' => '/orders/', 'method' => 'POST', 'class' => 'inline-block']) !!}
              <div class="col-xs-12">
                Carrito de compras:
                <br>
                Cantidad de productos {{$productsSize}}
                <br>
                Total a pagar:{{$total}}
              </div>
              <div class="col-xs-12">
                @foreach($shopping_cart as $product)
                  {{$product->name}} ${{$product->price}}
                @endforeach
              </div>

                <input type="submit" name="" value="Realizar pedido" class="btn btn-success">
              {!!Form::close() !!}
          </div>
        </div>
      </div>


      <div class="container">
        <br><br><br><br><br><br><br><br><br>
        <h1>Menu</h1>

        <div class="row">
          <p>Pizzas</p>
          @foreach($products as $product)
            @if($product->category_id == 1)
              <div class="col-md-4">
                <img style="height:150px;" class="col-xs-12" src="/images/products/{{$product->image}}"
            alt="img-responsive" />
                <h3>{{$product->name}}</h3>
                <h3>{{$product->price}}</h3>
                <p>{{$product->description}}</p>

                {!!Form::open(['url' => '/shopping_carts/', 'method' => 'POST', 'class' => 'inline-block']) !!}
                  <input type="hidden" name="product_id" value="{{$product->id}}">
                  <input type="hidden" name="product_name" value="{{$product->name}}">
                  <input type="hidden" name="product_price" value="{{$product->price}}">
                  <input type="hidden" name="product_description" value="{{$product->description}}">
                  <label>cantidad:</label>
                  <input type="number" name="qty" >
                  <input type="submit" class="col-xs-12 btn btn-success" name="" value="Agregar al carrito">
                {!! Form::close() !!}
                <br>
                <br>

              </div>
            @endif
          @endforeach
        </div>
        <div class="row">
          <p>Bebidas</p>
          @foreach($products as $product)
            @if($product->category_id == 31)
              <div class="col-md-4">
                <img style="height:150px;" class="col-xs-12" src="/images/products/{{$product->image}}"
            alt="img-responsive" />
                <h3>{{$product->name}}</h3>
                <h3>{{$product->price}}</h3>
                <p>{{$product->description}}</p>

                {!!Form::open(['url' => '/shopping_carts/', 'method' => 'POST', 'class' => 'inline-block']) !!}
                  <input type="hidden" name="product_id" value="{{$product->id}}">
                  <input type="hidden" name="product_name" value="{{$product->name}}">
                  <input type="hidden" name="product_price" value="{{$product->price}}">
                  <input type="hidden" name="product_description" value="{{$product->description}}">
                  <label>cantidad:</label>
                  <input type="number" name="qty" >
                  <input type="submit" class="col-xs-12 btn btn-success" name="" value="Agregar al carrito">
                {!! Form::close() !!}
                <br>
                <br>

              </div>
            @endif
          @endforeach
        </div>

      </div>
      <div class="container">
        <br>
        <br>
        <br>
      </div>
    </div>


    @endif

@endsection
