<?php

namespace App;
use App\Bus;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function bus()
    {
        return $this->belongsTo('App\Bus');
    }
}
