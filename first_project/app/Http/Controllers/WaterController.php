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

    public function create()
    {
        $waterArr = [
            [
                'name' => 'mineralWater',
                'fabric' => 'LipetskMV',
                'price' => 42,
            ],
            [
                'name' => 'distillWater',
                'fabric' => 'VTK',
                'price' => 99,
            ],
        ];
        foreach ($waterArr as $item) {
            Product::create($item);
        }
        dd('water created succesfully');
    }
    //
}
