@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center fw-bold">{{ $title }}</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <main class="form-signin w-100 m-auto">
                <form>
                    <img class="mb-5" src="{{ url('img/mfl4-nobg.png') }}" alt="">

                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating">
                        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>

                        <small class="d-block text-center mt-3 mb-5 ">Not registered? <a href="/register"
                                class="text-decoration-none">Register Now!</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
