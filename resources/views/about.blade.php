@extends('layouts.main')

@section('container')
    <section class="container">
        <h1 class="mb-5 text-center fw-bold">MFL4 About Page</h1>
        <article class="text-center fw-semibold">
            <h3>{{ $name }}</h3>
            <p>{{ $email }}</p>
            <img src="img/{{ $image }}" alt="<?= $name ?>" width="200"
                class="img-thumbnail rounded-3 border-5 border-primary">
        </article>
    </section>
@endsection
