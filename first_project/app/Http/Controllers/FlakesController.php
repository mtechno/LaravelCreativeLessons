<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FlakesController extends Controller
{
    public function index()
    {
        return "Flakesssss";
    }

    public function create()
    {
        $flakesArr = [
            [
                'name' => 'onionFlakes',
                'fabric' => 'LipetskBred',
                'price' => 15,
            ],
            [
                'name' => 'garlikFlakes',
                'fabric' => 'MoscowChips',
                'price' => 50,
            ],
        ];
        foreach($flakesArr as $flakesItem)
        {
            Product::create($flakesItem);
        }
        dd('flakes created successfully');
    }
    //
}
