<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    protected $table = 'sub_districts';
    protected $fillable = ['city_id', 'sub_district_name', 'sub_district_description'];
    public $timestamps = false;
}
