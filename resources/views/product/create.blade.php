@extends('layouts.master')

@section('kuchb')

<div>
    <h1>{{ $product->id !=null?'Update' : 'Create' }} Product</h1>
</div>
<div class="container">
    <form action="{{ $product->id !=null?route('product.update',['id'=>$product->id]):route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text"  class="form-control" value="{{ $product->name }}" name="name" id="name" placeholder="">
          </div>

          <div class="form-group">
              <label for="price">Price</label>
              <input type="number"  class="form-control" value="{{ $product->price }}" name="price" id="price"  placeholder="">
            </div>
            <div class="form-group">
                <label for="discount">Discount</label>
                <input type="number"  value="{{ $product->discount }}" class="form-control" name="discount" id="discount"  placeholder="">
              </div>
            <div>
              <input type="file"  name="image">
            </div>
            <div>
              <input type="submit" value="Save" class="btn btn-success">
            </div>


    </form>
</div>


@endsection
