<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProduct($id,$dis)
    {
        return view('product.single',compact('id','dis'));
    }
}
