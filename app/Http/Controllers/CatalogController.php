<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\Product;

class CatalogController extends Controller
{
    public function getIndex()
    {
        $catalogs = Catalog::all();
        return view('catalog_all', compact('catalogs'));
    }

    public function getOne(Catalog $catalog)
    {
        $products=Product::where('catalog_id', $catalog->id)->get();
        return view('catalog_one', compact('catalog', 'products'));
    }
}
