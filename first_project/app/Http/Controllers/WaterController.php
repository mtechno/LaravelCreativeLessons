<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WaterController extends Controller
{
    public function index()
    {
        $water = Product::find(1);
        dd($water);

    }
    //
}
