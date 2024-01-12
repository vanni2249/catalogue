<?php

use App\Models\Item;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('shop.index',['items' => Item::all()]);
});

Route::get('/items/{item}',function(Item $item){
    return view('shop.items.show',['item' => $item]);
})->name('shop.items.show');

Route::get('/admin/items', function() {
    return view('admin.items.index');
})->name('admin.items.index');

Route::get('admin/items/{item}/{show}', function(Item $item,$show) {
    return view('admin.items.show',['item'=> $item,'show' => $show]);
})->name('items.show');