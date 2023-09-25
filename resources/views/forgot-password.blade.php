@extends('layouts.master')
@section('content')
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
    <section class="vh-100">
        <div class="container py-5">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    @if(session('status'))
                        <div class="alert alert-success"><x-auth-session-status class="mb-4" :status="session('status')" /></div>
                        @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <!-- Email input -->
                        <div class="text-danger mb-3"><x-input-error :messages="$errors->get('email')" class="mt-2" /></div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                value="{{ old('email') }}" placeholder="Enter your email" required />
                        </div>

                        <!-- Submit button -->
                        <!-- Submit button -->
                        <div class="row justify-content-center align-items-center g-2">
                            <div><button type="submit" class="col-12 btn btn-primary btn-lg btn-block">
                                Email Password Reset Link</button></div>
                                <p class="text-danger lead text-center fw-bold">The email takes 2 to 10 minutes to arrive</p>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
