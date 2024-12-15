@extends('nav')
@section('content')
<div class="content">
    <div class="image"></div>
    <div class="text">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Delectus, corrupti ipsum, dolores beatae quam sunt numquam 
            accusamus quasi iure debitis totam laboriosam quisquam 
            voluptas magnam dicta cumque ea voluptatum? Quia?
        </p>
    </div>
</div>
<div class="cards">
    @foreach($recipes as $recipe)
        <div class="card">
            <div class="card-image">
                @if($recipe->image)
                    <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->name }}">
                @else
                    <img src="{{ asset('images/default.jpg') }}" alt="Default image">
                @endif
            </div>
            <div class="card-content">
                <h3>{{ $recipe->name }}</h3>
                <p>{{ Str::limit($recipe->ingredients, 100) }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
