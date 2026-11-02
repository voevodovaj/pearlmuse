<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function getIndex(Product $product)
    {
        return view('product_one', compact('product'));
    }
}