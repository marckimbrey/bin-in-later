@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $item->product }}</h2>
    <p> {{ $item->location }}</p>
    <p> Quantity {{ $item->box_size * $item->boxes }}</p>
    <p> {{ $item->file_name }}</p>
    <img src='{{ asset("storage/".$item->file_name) }}' alt="">

</div>
@endsection