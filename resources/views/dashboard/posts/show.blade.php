@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <h1 class="mb-3 fw-bold">{{ $post->title }}</h1>

                <a href="/dashboard/posts/" class="btn btn-outline-primary"><i class="bi bi-arrow-left"></i> Back to My
                    Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-outline-warning"><i
                        class="bi bi-pencil-square"></i>
                    Edit</a>
                <a href="/dashboard/posts" class="btn btn-outline-danger"><i class="bi bi-trash"></i>
                    Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-5 text-decoration-none btn btn-outline-primary">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
