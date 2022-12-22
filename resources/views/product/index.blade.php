@extends('layouts.master')

@section('kuchb')

<div class="text-center bg-success text-light">
    <h1>Products</h1>
</div>
<div class="container">
    <div class="text-end">
        <a class="btn btn-info" href="{{ route('product.create') }}">Create </a>

    </div>
    <table class="table table-striped table-responsive">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($products as $key=> $product)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td><img width="100" height="100" src="{{ $product->img }}" alt=""> {{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->discount }}</td>

                    <td><a class="btn btn-primary" href="{{ route('product.edit',['id'=>$product->id]) }}">Edit</a></td>
                </tr>
                @endforeach

            </tbody>
    </table>
</div>


@endsection
