<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'description', 'quantity', 'thumbnail', 'unit_price', 'picture', 'category_id', 'shop_id', 'discount', 'weight'];
    public $timestamps = false;
}
