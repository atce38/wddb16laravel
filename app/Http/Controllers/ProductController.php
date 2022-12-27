<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProduct($id,$dis)
    {
        return view('product.single',compact('id','dis'));
    }

public function index()
{
    $products=Product::get();

    return view('product.index',compact('products'));
}
    public function create()
    {
        $product=new Product;
        return view('product.create',compact('product'));
    }

    public function edit($id)
    {
        $product=Product::find($id);
        return view('product.create',compact('product'));
    }
    public function store(Request $request)
    {
        $request->validate(['name'=>'required','price'=>'required|numeric','discount'=>'required'],
        ['name.required'=>'Please Enter A Valid Name']);
        $data=$request->all();
        // return $data;

        if($request->has('image'))
        {
            $piture=$request->image;
        // $file_name=$piture->getClientOriginalName();
             $ext=$piture->getClientOriginalExtension();
            $file_name=time().'.'.$ext;
            $file_path='/assets/proucts/';
            $piture->move(public_path().$file_path,$file_name);

            $data['img']=$file_path.$file_name;
            Product::create($data);
            return redirect()->route('product.index')->with('success',"Product Create Successfully!");
        }

    }

    public function update(Request $request,$id)
    {
        $product=Product::find($id);
        $data=$request->all();

        if($request->has('image'))
        {
            $piture=$request->image;
        // $file_name=$piture->getClientOriginalName();
             $ext=$piture->getClientOriginalExtension();
            $file_name=time().'.'.$ext;
            $file_path='/assets/proucts/';
            $piture->move(public_path().$file_path,$file_name);

            $data['img']=$file_path.$file_name;
        }
        $product->update($data);
        return redirect()->route('product.index');

    }
}
