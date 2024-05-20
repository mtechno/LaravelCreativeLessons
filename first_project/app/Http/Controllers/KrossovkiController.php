<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class KrossovkiController extends Controller
{
    public function index()
    {
        $krossovki = Product::find(1);
        dd($krossovki);
    }

    public function create()
    {
        $krossovkiArr = [
            [
                'name' => 'adidasKrossovki',
                'fabric' => 'Vietnam',
                'price' => 5000,
            ],
            [
                'name' => 'nikeKrossovki',
                'fabric' => 'Thailand',
                'price' => 4599,
            ],
        ];
        foreach ($krossovkiArr as $item) {
            Product::create($item);
        }
        dd('krossovki created succesfully');
    }

    //
}
