<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\api\public\Products;
use App\Models\Category;
use App\Models\Product;
use App\Rules\Price;

class ProductCrud extends Controller
{



    public function list(Request $request)
    {


        $search = $request->get('search');
        // dd($search);
         if( ! $search ){

            $products = Product::query()->with('category')->get();

         }else{
             $products = Product::query()
                 ->where('name', 'LIKE', "%{$search}%")->get();
         }


        return view('products.list', ['data' => $products,
                                        'search'=>$search
                                   ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::get();

        return view('products.edit', ['product' => $product,
                                        'categories'=>$categories
                                   ]);
    }

    public function create()
    {

        $categories = Category::get();

        return view('products.create', [
                                    'categories'=>$categories
                                   ]);
    }

    public function store(Request $request)
    {
       // dd($request);
        $validated = $request->validate([
            'name'=>'required',
            'code'=>'nullable',
            'description'=>'nullable',
            'ingredients'=>'nullable',
            'price'=>['required', 'string', new Price],
            'category_id'=>'required',
        ]);

       // dd($validated);

        //o preço no banco aceita apenas  '.' como separador decimal
        $validated['price'] = str_replace(',', '.', $validated['price']);

        try{
            Product::create($validated);
        }catch(\Exception $e){
            abort(500, 'Algo aconteceu de errado, tente novamente. Se o erro persistir contacte o administrador do sistema');
        }


        return redirect()->route('product.list');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'=>'required',
            'code'=>'nullable',
            'description'=>'nullable',
            'ingredients'=>'nullable',
            'price'=>['required', 'string', new Price],
            'category_id'=>'required',
        ]);

        //o preço no banco aceita apenas  '.' como separador decimal
        $validated['price'] = str_replace(',', '.', $validated['price']);

        try{
            Product::where('id',$id)->update($validated);
        }catch(\Exception $e){
            abort(500, 'Algo aconteceu de errado, tente novamente. Se o erro persistir contacte o administrador do sistema');
        }

        return redirect()->route('product.list');
    }

    public function activateProduct($prodId)
    {

        try{
            Product::where('id',$prodId)->update(['active'=>true]);
        }catch(\Exception $e){
            abort(500);
        }

        return redirect()->route('product.list');

    }

    public function deactivateProduct($prodId)
    {

        try{
            Product::where('id',$prodId)->update(['active'=>false]);
        }catch(\Exception $e){
            abort(500);
        }

        return redirect()->route('product.list');

    }

}
