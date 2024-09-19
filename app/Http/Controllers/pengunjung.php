<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengunjung extends Controller
{
    public function pengunjung(){
        return view('pages.dashboard');
    }
}
