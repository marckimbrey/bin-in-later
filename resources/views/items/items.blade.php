@extends('layouts.app')

@section('content')
<div class="container">
    <!-- display as table -->
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Product</th>
            <th scope="col">Quanity</th>
            <th scope="col">location</th>
            <th scope="col">file</th>
            <th scope="col">delete</th>
</tr>

        </thead>

        <tbody>
        @foreach($items as $item)
            <tr>
                <td><a href="/items/{{ $item->id }}">{{ $item->product }}</a></td>
                <td> {{ $item->boxes * $item->boxes }}</td>
                <td>todo</td>
                <td>{{ $item->file_name }}</td>
                <td><form action="/items/{{ $item->id }}" method="post">
                    @csrf
                    @method('DELETE')
                        <input type="submit" name="item" value="{{ $item->id}}" />
                </form>
                </td>  
            </tr>
        @endforeach



        </tbody>
    </table>

</div>
@endsection