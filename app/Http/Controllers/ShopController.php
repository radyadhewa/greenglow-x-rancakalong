<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function cart(){
        return view('cart');
    }
    public function shop(){
        $produk = Product::all();
        //compact itu nge read data dari tabel produk
        return view('Shop.shop', compact(['produk']));
    }

    public function detail(){
        return view('Shop.detail');
    }
}
