@extends('layouts.app')

@section('content')
<div class="conainer"></div>
    <form action="/items/{{ $item->id }}" method="POST">
    @method('PUT')
    @csrf
        <div class="form-section">
            <label for="product"> Product</label>
            <input type="text" name="product" value="{{$item->product}}">
        </div>
        <div class="form-section">
            <label for="box_size"> box size</label>
            <input type="text" name="box_size" value="{{$item->box_size}}">
        </div>
        <div class="form-section">
            <label for="boxes">    boxes</label>
            <input type="text" name="boxes" value="{{$item->boxes}}">
        </div>
        <div class="form-section">
            <label for="file_name">file name</label>
            <input type="text" name="file_name" value="{{$item->file_name}}">
        </div>
        <button type="submit">submit</button>
    </form>
</div>
@endsection