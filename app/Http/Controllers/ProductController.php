<?php

namespace App\Http\Controllers;

// import model product
use App\Models\Product;

// import return type view
use Illuminate\View\View;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): View
    {
        // get all data from table products
        $products = Product::latest()->paginate(10);

        // render view with products data
        return view('products.index', compact('products'));
    }
}