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
        dd($fish);

    }
    //
}
