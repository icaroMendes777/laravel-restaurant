<?php

namespace App\Http\Controllers\api\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class Products extends Controller
{

    public function getAllProducts()
    {
        return Product::all();
    }
}
