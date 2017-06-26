<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Order_product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $products = Product::paginate(10);
        return view('home',
                [
                  'shopping_cart'=>$shopping_cart,
                  'total'=>$total,
                  'productsSize'=>$productsSize,
                  'products'=>$products
                ]
      );
    }
}
