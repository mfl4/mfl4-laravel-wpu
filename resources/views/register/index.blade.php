@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center fw-bold">{{ $title }}</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <form>
                    <img class="mb-5" src="{{ url('img/mfl4-nobg.png') }}" alt="">

                    <div class="form-floating rounded">
                        <input type="text" class="form-control" id="name" placeholder="Freya Jayawardana">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="username" placeholder="fre">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>

                    <small class="d-block text-center mt-3 mb-5">Already registered? <a href="/login"
                            class="text-decoration-none">Login Now!</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
