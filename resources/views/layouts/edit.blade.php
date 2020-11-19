@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/items" method="post">
        <div class="form-secion">
            <label for="product">Product</label>
            <input type="text" name="product">
        </div>
        <div class="form-secion">
            <label for="box_size">Product</label>
            <input type="text" name="box_size">
        </div>
        <div class="form-secion">
            <label for="boxes">Product</label>
            <input type="text" name="boxes">
        </div>
        <div class="form-secion">
            <label for="file_name">Product</label>
            <input type="text" name="file_name">
        </div>
    </form>
</div>
</div>
@endsection