<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

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
    $a=12;
    $b=15;

    $arr=[12,34,665,678,34567,32235];
    return view('welcome',compact('a','b','arr'));
});

Route::get('courses-index',function(){

$abc="Hello World";
   return view('index');
}
)->name('public.courses');

Route::get('product/{id}/discount/{dis}',[ProductController::class,'viewProduct']);


Route::get('slider',[SliderController::class,'index'])->name('slider.index');
Route::get('slider/create',[SliderController::class,'create'])->name('slider.create');
Route::post('slider/store',[SliderController::class,'store'])->name('slider.store');

Route::get('about',function(){
echo "About US";
})->name('about');




