<?php

namespace App\Http\Controllers\api\public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Product;

class Products extends Controller
{

    public function getAllProducts()
    {
        return Product::all();
    }

    public function getMenu()
    {

        $menu = Category::where('active',true)
                    ->with(array('product' => function($query) {
                        $query->where('active',true)
                        ->orderBy('order', 'ASC');
                    }))
                    ->orderBy('order', 'ASC')
                    ->get();

        return $menu;
    }
}
