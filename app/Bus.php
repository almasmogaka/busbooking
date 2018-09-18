<?php

namespace App;
use App\Customer;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = array('no', 'name', 'from', 'depar', 'to', 'seats', 'price');

    protected $table = 'buses';

    public function customers() {
        return $this->hasMany('App\Customer');
    }
}
