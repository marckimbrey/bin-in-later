@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $item->product }}</h2>
    <p> {{ $item->box_size }}</p>
    <p> {{ $item->boxes }}</p>
    <p> Quantity {{ $item->box_size * $item->boxes }}</p>
    <p> {{ $item->file_name }}</p>

</div>
@endsection