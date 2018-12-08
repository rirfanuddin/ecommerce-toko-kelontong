<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTransportation extends Model
{
    protected $table = 'user_transportation';
    protected $fillable = ['user_transportation_name'];
    public $timestamps = false;
}
