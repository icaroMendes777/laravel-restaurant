<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProductCrud;
use App\Http\Controllers\admin\CategoryCrud;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->group(function () {


    Route::get('/', function () {
        return redirect(route('product.list'));
    });

    Route::prefix('produtos')->controller(ProductCrud::class)->group(function () {


        Route::get('/','list')->name('product.list');
        Route::get('/criar','create')->name('product.create');
        Route::post('/store','store')->name('product.store');
        Route::get('/editar/{id}','edit')->name('product.edit');
        Route::patch('/update/{id}','update')->name('product.update');
        Route::get('/ativar/{id}','activateProduct')->name('product.activate');
        Route::get('/desativar/{id}','deactivateProduct')->name('product.deactivate');

    });


    Route::prefix('categorias')->controller(CategoryCrud::class)->group(function () {


        Route::get('/','list')->name('category.list');
        Route::get('/criar','create')->name('category.create');
        Route::post('/store','store')->name('category.store');
        Route::get('/editar/{id}','edit')->name('category.edit');
        Route::patch('/update/{id}','update')->name('category.update');
        Route::patch('/reorganiza/{categoryId}','reOrderProducts')->name('category.reorder.products');
        Route::get('/reordenar','reOrderCategories')->name('category.reorder');
        Route::patch('/reordenar/salvar','reOrderCategories')->name('category.reorder.save');

    });



});
