<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryCrud extends Controller
{


    public function list()
    {

        $categories = Category::all();

        return view('categories.list', ['data' => $categories,
                                   ]);
    }

    public function edit($id)
    {
        $category = Category::find($id);

        $products = Product::where('category_id', $id)
                        ->orderBy('order', 'asc')->get();

        return view('categories.edit', ['category' => $category,
                                        'products' => $products
                                   ]);
    }

    public function create()
    {

        return view('categories.create');
    }

    public function store(Request $request)
    {
       // dd($request);
        $validated = $request->validate([
            'name'=>'required',
        ]);

        try{
            Category::create($validated);
        }catch(\Exception $e){
            abort(500, 'Algo aconteceu de errado, tente novamente. Se o erro persistir contacte o administrador do sistema');
        }


        return redirect()->route('category.list');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'=>'required'
        ]);


        try{
            Category::where('id',$id)->update($validated);
        }catch(\Exception $e){
            abort(500, 'Algo aconteceu de errado, tente novamente. Se o erro persistir contacte o administrador do sistema');
        }

        return redirect()->route('category.list');
    }

}
