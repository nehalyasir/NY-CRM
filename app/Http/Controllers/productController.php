<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function CreateProducts()
    { //website.clint register insert
        return view('products.addproduct');
    }

    public function ViewProducts()
    { //website.clint register insert
        return view('products.viewproducts');
    }
}
