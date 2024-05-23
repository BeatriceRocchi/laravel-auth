@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center my-4">Add a new project</h2>

        <form action="" class="form-custom">
            {{-- Title input --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Add project's title" name="title">
            </div>

            {{-- Description textarea --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="6"
                    placeholder="Add project's description"></textarea>
            </div>

            {{-- Image input --}}
            {{-- TODO: aggiungere caricamento funzionante --}}
            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="file" class="form-control" id="img" placeholder="Add project's image" name="img">
            </div>

            <button class="btn btn-custom-primary">Submit</button>
        </form>
    </div>
@endsection
