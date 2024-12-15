@extends('nav')

@section('content')
<div class="container">
    <h1>Create Menu</h1>
    <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Name Field -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter recipe name" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- price Field -->
        <div class="form-group">
            <label for="price">Price</label>
            <textarea class="form-control" id="price" name="price" rows="5" placeholder="List the price" required></textarea>
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- description Field -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="7" placeholder="Describe the cooking steps" required></textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Image Upload -->
        <div class="form-group">
            <label for="image">Menu Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-3">Create Recipe</button>
    </form>
</div>
@endsection