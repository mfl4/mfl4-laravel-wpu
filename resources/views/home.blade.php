@extends('layouts.main')

@section('container')
    <section class="container">
        <h1 class="mb-5 text-center fw-bold">MFL4 Home Page</h1>

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded-5">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1920x820?aesthetic" class="d-block w-100" alt="aesthetic">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1920x820?minimalistic" class="d-block w-100" alt="minimalistic">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1920x820?futuristic" class="d-block w-100" alt="futuristic">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
@endsection
