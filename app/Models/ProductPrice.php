<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{

public $fillable=['price', 'type', 'product_id', 'type_description'];

public function product() {
    return $this->belongsTo(Product::class);
}

}
