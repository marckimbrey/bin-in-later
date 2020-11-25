@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/items" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-section">
            <label for="product"> Product</label>
            <input type="text" name="product">
        </div>
        <div class="form-section">
            <label for="box_size"> box size</label>
            <input type="text" name="box_size">
        </div>
        <div class="form-section">
            <label for="boxes">    boxes</label>
            <input type="text" name="boxes">
        </div>
        <div class="form-section">
            <label for="location">    location</label>
            <input type="text" name="location">
        </div>
        <div class="form-section">
            <label for="file_name">file name</label>
            <input type="file" accept="image/*" capture="camera" name="file_name">
        </div>
        <button type="submit">submit</button>
    </form>
</div>
@endsection