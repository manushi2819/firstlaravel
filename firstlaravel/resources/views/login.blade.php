@extends('layout')
@section('title', 'Login')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control @error('email') is-invalid @enderror" name="password" placeholder="Enter your password" value="{{ old('password') }}">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" style="width: 150px;">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">Forgot your password? <a href="#">Reset here</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
