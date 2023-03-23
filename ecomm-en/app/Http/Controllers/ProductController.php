<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    function index(){

        $data = Product::all();
        return view('product', ['products'=> $data]);
    }
    function detail($id){
        return Product::find($id);
    }
}
