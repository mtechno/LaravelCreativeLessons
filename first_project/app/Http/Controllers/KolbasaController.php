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

    public function create()
    {
        $kolbasaArr = [
            [
                'name' => 'doctorKolbasa',
                'fabric' => 'Kalach',
                'price' => 200,
            ],
            [
                'name' => 'lubitelKolbasa',
                'fabric' => 'Ostankiono',
                'price' => 205,
            ],
        ];
        foreach ($kolbasaArr as $item) {
            Product::create($item);
        }
        dd('kolbasa created succesfully');
    }

    //
}
