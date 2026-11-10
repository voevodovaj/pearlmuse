<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\Catalog;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function getIndex(Product $product)
    {
        $catalog = Catalog::find($product->catalog_id);

        return view('product_one', compact('product', 'catalog'));
    }
public function postAddPrice(Product $product, Request $request) {

$request->merge(['product_id'=>$product->id]);

ProductPrice::create($request->all());
return redirect()->back();

}

public function getDelPrice(ProductPrice $product_price){

$product_price->delete();
return redirect()->back();

}

}