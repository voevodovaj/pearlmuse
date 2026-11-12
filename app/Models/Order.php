<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = ['data', 'data_json', 'username', 'email', 'phone', 'country', 'city', 'post_code', 'address', 'user_id'];
}
