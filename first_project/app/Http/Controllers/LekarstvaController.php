<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LekarstvaController extends Controller
{
    public function index()
    {
        $lekarstva = Product::find(1);
        dd($lekarstva);
    }
    //
}
