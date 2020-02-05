<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AberandaController extends Controller
{
    public function dashboard() {
    	return view('Administrator.menu.beranda');
    }
}
