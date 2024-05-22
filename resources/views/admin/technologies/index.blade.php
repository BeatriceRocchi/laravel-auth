@extends('layouts.admin')

@section('content')
    <div class="wrapper-tech text-center">
        <h3 class="my-4">Technologies list</h3>

        @if (session('success_msg'))
            <div class="alert alert-info" role="alert">
                {{ session('success_msg') }}
            </div>
        @endif

        @if (session('error_msg'))
            <div class="alert alert-danger" role="alert">
                {{ session('error_msg') }}
            </div>
        @endif

        <form class="d-flex my-4" action="{{ route('admin.technologies.store') }}" method="POST">
            @csrf
            <input class="form-control me-2" placeholder="Add a technology" name="name">
            <button class="btn btn-outline-success" type="submit">Add</button>
        </form>

        <table class="table table-hover">
            <thead class="text-center">
                <tr class="align-middle">
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $technology)
                    <tr class="align-middle">
                        <td>
                            <input type="text" value="{{ $technology->name }}" name="name">
                        </td>
                        <td class="text-center">
                            <button class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
