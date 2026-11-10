<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public $fillable = ['name', 'image','description', 'parent_id'];
}
