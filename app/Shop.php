<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';
    protected $fillable = ['user_id', 'admin_id', 'shop_name'];
    public $timestamps = false;
}
