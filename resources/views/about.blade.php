@extends('layouts.master')
@section('content')
    <section class="main-banner mb-5" id="top">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <h1>About Us</h1>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row justify-content-center align-items-center g-2">
                <h3><span style="color: var(--primary-color);"><a style="color: var(--primary-color);"
                        href="{{ route('home') }}">{{ env('APP_NAME') }}</a></span> Ltd. is a company located
                    in Hong Kong, which provides a proxy service for people all over the world. </h3>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>Our <span style="color: var(--primary-color);">Product </span>? </h3>
                <p class="fs-5"><a href="{{ route('home') }}">{{ env('APP_NAME') }}</a> is a VPN tool that builds a fast
                    and secure connection between your device and
                    every website or application allowing you to anonymously appear to be anywhere you choose.</p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>Our <span style="color: var(--primary-color);">Team </span>? </h3>
                <p class="fs-5">We have a highly-trained team of experienced professionals who strive to provide a higher
                    level of service and support.
                </p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>Our <span style="color: var(--primary-color);">Promise </span>? </h3>
                <p class="fs-5">We’re devoted to delivering the fast secure and reliable VPN service to you. Meanwhile, we
                    promise that we will never betray you by compromising on our promise.
                </p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>Contact Us</h3>
                <p class="fs-5">Please contact us via email info@miloconnected.com if you have any questions. </p>
            </div>
        </div>
    </section>
@endsection
