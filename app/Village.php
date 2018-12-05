<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table = 'villages';
    protected $fillable = ['sub_district_id', 'village_name', 'village_description'];
    public $timestamps = false;
}
