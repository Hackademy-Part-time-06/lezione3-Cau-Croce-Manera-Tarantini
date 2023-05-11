<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageCotroller extends Controller
{
    public function homepage() {
        return view('welcome');
    }
    public function detail() {
        return view('detail');
    }
}
