<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use Image;

class HomeController extends Controller
{
    public function homepage() {
        $buses = Bus::all();
        return view('home')->withbuses($buses);
    }
}
