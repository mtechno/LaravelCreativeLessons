<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class KrossovkiController extends Controller
{
    public function index()
    {
        $krossovki = Product::find(1);
        dd($krossovki);
    }
    //
}
