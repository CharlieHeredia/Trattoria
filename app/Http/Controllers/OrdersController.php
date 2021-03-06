<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Category;
use App\Order_product;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $shopping_cart = \Session::get('cart.orderProduct');
      if($shopping_cart) {
        $total = Order_product::total();
        $productsSize = Order_product::productsSize();

      } else {
        $total = 0;
        $productsSize = 0;
        $shopping_cart = array();
      }
        $order = new Order;
        $id = Auth::id();
        $order->user_id = $id;
        $order->status = 'Pendiente';
        echo "$order->user_id";
        echo "\nEstado de orden: $order->status";
        echo "\nTotal: $total";
        echo "\nCantidad de productos: $productsSize";
        $order->save();
        $total = 0;
        $productsSize = 0;
        $shopping_cart = array();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
