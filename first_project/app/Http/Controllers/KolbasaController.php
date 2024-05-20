<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class KolbasaController extends Controller
{
    public function index()
    {
        $kolbasa = Product::find(1);
        dd($kolbasa);
    }
    //
}
