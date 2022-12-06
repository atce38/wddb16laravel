@extends('layouts.master')

@section('kuchb')

<div class="container">
<form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
    </div>

    <div class="form-group">
        <label for="fname">Father Name</label>
        <input type="text" class="form-control" name="fname" id="fname" aria-describedby="helpId" placeholder="">
      </div>
      <div>
        <input type="file" name="img">
      </div>
      <div>
        <input type="submit" value="Save" class="btn btn-success">
      </div>
</form>
</div>
@endsection
