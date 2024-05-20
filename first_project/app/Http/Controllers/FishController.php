<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FishController extends Controller
{
    public function index()
    {

//
//        $d = [
//            'f' => 'fish',
//            'd' => now(),
//        ];
//        return response()->json(
//            $d
//        );
//        $view = view('fish', compact('d'));
//        return $view;
//        return 'FISHHHHHH';

        $fish = Product::find(1);
        echo $fish->name;
        dd($fish);

    }

    public function create()
    {
        $fishArr = [
            [
                'name' => 'treskaFish',
                'fabric' => 'MurmanskTralFlot',
                'price' => 100,
            ],
            [
                'name' => 'pikshaFish',
                'fabric' => 'MurmanskTralFlot',
                'price' => 88,
            ],
        ];
        foreach($fishArr as $fishItem)
        {
            Product::create($fishItem);
        }
        dd('fish created successfully');
    }
    //
}
