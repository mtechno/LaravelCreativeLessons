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

    public function create()
    {
        $milkArr = [
            [
                'name' => 'lightMilk',
                'fabric' => 'Vkusnoteevo',
                'price' => 50,
            ],
            [
                'name' => 'heavyMilk',
                'fabric' => 'Korenovka',
                'price' => 75,
            ],
        ];
        foreach ($milkArr as $item) {
            Product::create($item);
        }
        dd('milk created succesfully');
    }
    //
}
