<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $data = [
            ['id' => 1, 'produk' => 'Sabun'],
            ['id' => 2, 'produk' => 'Shampo'],
            ['id' => 3, 'produk' => 'Sikat Gigi'],
        ];

        return view("list-product", compact('data'));
    }
}
