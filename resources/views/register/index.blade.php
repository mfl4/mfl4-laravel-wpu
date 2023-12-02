@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center fw-bold">{{ $title }}</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input required type="text" class="form-control rounded-top-3 @error('name') is-invalid @enderror"
                            id="name" name="name" placeholder="fullname" value="{{ old('name') }}">
                        <label class="form-label" for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input required type="text" class="form-control @error('username') is-invalid @enderror"
                            id="username" name="username" placeholder="username" value="{{ old('username') }}">
                        <label class="form-label" for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input required type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label class="form-label" for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input required type="password"
                            class="form-control rounded-bottom-3 @error('password') is-invalid @enderror" id="password"
                            name="password" placeholder="Password">
                        <label class="form-label" for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>

                    <small class="d-block text-center mt-3 mb-5">Already registered? <a href="/login"
                            class="text-decoration-none">Login Now!</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
