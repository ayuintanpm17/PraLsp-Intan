<?php

namespace App\Http\Controllers;

use App\DetailOrder;
use Illuminate\Http\Request;

class DetailOrderController extends Controller
{
    public function all(){
        return view('Administrator.menu.detailorder');
    }
}
