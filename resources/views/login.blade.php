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
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email input -->
                        <div class="text-danger mb-3"><x-input-error :messages="$errors->get('email')" class="mt-2" /></div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                value="{{ old('email') }}" placeholder="Enter your email" required />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                required autocomplete="current-password" placeholder="Enter your password" />
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <a href="{{ route('password.request') }}">Forgot password?</a>
                        </div>

                        <!-- Submit button -->
                        <!-- Submit button -->
                        <div class="row justify-content-center align-items-center g-2">
                            <div class="col-4"><button type="submit" class="col-12 btn btn-primary btn-lg btn-block">Sign
                                    in</button></div>
                            <div class="col-8" style="text-align: right;"><span>You don't have an account? <a
                                        href="{{ route('register') }}">Register now</a></span></div>
                        </div>
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div>

                        <a class="btn btn-danger btn-lg btn-block col-12" href="{{ route('redirectToGoogle') }}"
                            role="button">
                            <i class="fab fa-google me-2"></i>Continue with Google
                        </a>
                        <a class="btn btn-primary btn-lg btn-block col-12 mt-3" style="background-color: #3b5998" href="{{ route('redirectToFacebook') }}"
                            role="button">
                            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                        </a>
                        <a class="btn btn-primary btn-lg btn-block col-12 mt-3" style="background-color: #55acee"
                            href="{{ route('redirectToTwitter') }}" role="button">
                            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
