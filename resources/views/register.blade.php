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
                    <form method="POST"
                        action="{{ route('register') }}">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline
                        mb-4">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control form-control-lg"
                            value="{{ old('name') }}" placeholder="Enter your name" required />
                        <div class="text-danger">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                value="{{ old('email') }}" placeholder="Enter your email" required />
                            <div class="text-danger">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                required autocomplete="current-password" placeholder="Enter your password" />
                            <div class="text-danger">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password_confirmation">password_confirmation</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control form-control-lg" required autocomplete="current-password_confirmation"
                                placeholder="Enter your password again" />
                            <div class="text-danger">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                        <!-- Password input -->

                        <!-- Submit button -->
                        <div class="row justify-content-center align-items-center g-2">
                            <div class="col-4"><button type="submit"
                                    class="col-12 btn btn-primary btn-lg btn-block">Register</button>
                            </div>
                            <div class="col-8 text-right" style="text-align: right;"><span class="text-right">Already have
                                    account?
                                    <a href="{{ route('login') }}">Login now</a></span></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
