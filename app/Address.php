<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    protected $fillable = ['province_id', 'city_id', 'sub_district_id', 'village_id', 'address_detail', 'address_postalcode'];
    public $timestamps = false;
}
