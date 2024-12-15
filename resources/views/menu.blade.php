@extends('nav')
@section('content')
    <div class="container mt-5">
        <h2>Recipe List</h2>
        <a href="{{ route('recipes.create') }}" class="btn btn-primary mb-3">Add New Recipe</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th> <!-- Tambahkan kolom gambar -->
                    <th>Name</th>
                    <th>Ingredients</th>
                    <th>Instructions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recipes as $recipe)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($recipe->image)
                                <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->name }}" style="width: 100px; height: auto;">
                            @else
                                No image available
                            @endif
                        </td>
                        <td>{{ $recipe->name }}</td>
                        <td>{{ $recipe->ingredients }}</td>
                        <td>{{ $recipe->instructions }}</td>
                        <td>
                            <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
