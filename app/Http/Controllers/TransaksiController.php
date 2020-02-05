<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function all(){
        return view('Administrator.menu.transaksi');
    }
}
