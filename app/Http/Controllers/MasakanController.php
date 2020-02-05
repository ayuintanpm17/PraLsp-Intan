<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasakanController extends Controller
{
    public function all(){
        return view('Administrator.menu.masakan');
    }
}
