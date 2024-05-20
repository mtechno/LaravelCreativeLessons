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

    public function create()
    {
        $lekarstvaArr = [
            [
                'name' => 'iod',
                'fabric' => 'Protec',
                'price' => 65,
            ],
            [
                'name' => 'paracetamol',
                'fabric' => 'PharmaTec',
                'price' => 99,
            ],
        ];
        foreach ($lekarstvaArr as $item) {
            Product::create($item);
        }
        dd('lekarstva created succesfully');
    }
    //
}
