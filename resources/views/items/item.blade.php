@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $item->product }}</h2>
    <p>Location: {{ $item->location }}</p>
    <p> Quantity: {{ $item->box_size * $item->boxes }}</p>
    <img src='{{ asset("storage/".$item->file_name) }}' alt="">
    <form action="/items/{{ $item->id }}" method="post">
        @csrf
        @method('DELETE')
        <button  class="btn btn-danger mt-4 px-3" name="item" value="{{ $item->id }} type="submit">delete</button>
    </form>
    <a class="btn btn-primary mt-4 px-4" href="/items/{{ $item->id }}/edit">edit </a>

</div>
@endsection