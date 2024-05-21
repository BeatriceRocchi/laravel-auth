@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Elenco progetti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Programming languages</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->programming_lang }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
