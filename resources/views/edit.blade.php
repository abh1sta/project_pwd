<!-- resources/views/edit.blade.php -->
@extends('nav')

@section('content')
    <h1>Edit Recipe</h1>
    <form action="{{ route('recipes.update', $recipe->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', $recipe->name) }}" required>

        <label for="ingredients">Ingredients</label>
        <textarea name="ingredients" required>{{ old('ingredients', $recipe->ingredients) }}</textarea>

        <label for="instructions">Instructions</label>
        <textarea name="instructions" required>{{ old('instructions', $recipe->instructions) }}</textarea>

        <label for="image">Image</label>
        <input type="file" name="image">

        <button type="submit">Update Recipe</button>
    </form>
@endsection
