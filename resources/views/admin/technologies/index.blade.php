@extends('layouts.admin')

@section('content')
    <h2>Elenco tecnologie</h2>
    <ul>
        @foreach ($technologies as $technology)
            <li>{{ $technology->name }}</li>
        @endforeach
    </ul>
@endsection
