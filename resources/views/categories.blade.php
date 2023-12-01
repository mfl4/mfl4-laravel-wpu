@extends('layouts.main')

@section('container')
    @if ($categories->count())
        <h1 class="mb-5 text-center fw-bold">Posts Categories</h1>

        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4">
                        <a href="/posts?category={{ $category->slug }}">
                            <div class="card text-bg-dark border-2 border-primary">
                                <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                                    alt="...">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-5 fs-3"
                                        style="background-color: rgba(13, 110, 253, 0.7) ">
                                        {{ $category->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <h1 class="container mt-5 p-5 text-center fs-1 fw-bold text-danger">No Category Found !!!</h1>
    @endif
@endsection
