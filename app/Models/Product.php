<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{

public $fillable=['name', 'picture', 'price', 'name', 'description', 'small_description', 'catalog_id', 'user_id', 'status'];

    public function catalogs(): BelongsToMany
    {
        return $this->belongsToMany(Catalog::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}