<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MilkController extends Controller
{
    public function index()
    {
        $milk = Product::find(1);
        dd($milk);
    }
    //
}
