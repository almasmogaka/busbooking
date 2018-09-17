<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = array('no', 'name', 'from', 'depar', 'to', 'seats', 'price');
}
