@extends('layouts.master')
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="header-text">
                        <div class="p-0 m-0 fw-bolder" style="font-size:70px;font-family: 'Merienda', cursive;">
                            <span style="color: var(--primary-color);">{{ env('APP_NAME') }}</span>
                            <span>for Everyone</span>
                        </div>
                        <span class="text-muted fs-4 p-0 m-0" style="font-family: 'Merriweather', serif;">Your Trusted
                            Path to Online Freedom</span>
                        <div class="main-button-gradient mt-4">
                            <div class="scroll-to-section"><a href="#price" class="fw-bold">Choose your plan</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image">
                        <img src="{{ asset('assets') }}/images/banner-right-image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="simple-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="left-image">
                        <img src="{{ asset('assets/imgs/know-1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 align-self-center px-5">
                    <h6>Get to Know {{ env('APP_NAME') }} Better </h6>
                    <h4 class="fs-1">Unlocking the World </h4>
                    <p class="fs-5" style="text-align: justify;">The internet may be a global
                        phenomenon, but its accessibility varies from one
                        country to
                        another. With {{ env('APP_NAME') }}, you don't have to physically traverse the world to access
                        unrestricted
                        online content. It effortlessly circumvents local censorship by altering your virtual location,
                        effectively disguising your presence as if you were browsing from a different geographical
                        location.</p>
                    <div class="white-button">
                        <a href="#price">Get {{ env('APP_NAME') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="left-image">
                        <img src="{{ asset('assets/imgs/know-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 align-self-center px-5">
                    <h6>Get to Know {{ env('APP_NAME') }} Better </h6>
                    <h4 class="fs-1 mb-3">Elevate Your Entertainment Experience </h4>
                    <p class="fs-5" style="text-align: justify;">Are you still frustrated by the limitations imposed
                        on your access to video streaming and gaming services? Well, fret no more, because
                        {{ env('APP_NAME') }} has
                        the solution you've been seeking. It not only grants you unrestricted access to a plethora of
                        video streaming services across the globe but also significantly reduces ping times and
                        minimizes lag during your gaming sessions. So go ahead, immerse yourself in non-stop
                        entertainment, anytime and anywhere you desire.</p>
                    <div class="btn btn-warning text-light mt-3">
                        <a class="text-light fw-bolder" href="#price">Get {{ env('APP_NAME') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section dir="rtl" class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="left-image">
                        <img src="{{ asset('assets/imgs/know-3.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 align-self-center px-5">
                    <h6>Get to Know {{ env('APP_NAME') }} Better </h6>
                    <h4 class="fs-1 mb-3">Fortify Your Data Privacy </h4>
                    <p class="fs-5" style="text-align: justify;">In today's digital landscape, safeguarding your
                        online data privacy has never been more crucial. {{ env('APP_NAME') }} empowers you to navigate
                        websites,
                        stream videos, and indulge in your preferred content all while preserving your anonymity.
                        Moreover, it shields your browsing history from prying eyes on public Wi-Fi connections,
                        ensuring that your data remains concealed and protected against any potential leaks.</p>
                    <div class="btn btn-warning text-light mt-3">
                        <a class="text-light fw-bolder" href="#price">Get {{ env('APP_NAME') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="left-image">
                        <img src="{{ asset('assets/imgs/know-4.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 align-self-center px-5">
                    <h6>Get to Know {{ env('APP_NAME') }} Better </h6>
                    <h4 class="fs-1 mb-3">Bolster Your Online Security </h4>
                    <p class="fs-5" style="text-align: justify;">Tired of constantly being monitored and vulnerable
                        to various online threats? {{ env('APP_NAME') }} has you covered. It shields you from IP-based
                        tracking,
                        ensuring your online activities remain private. Your devices are fortified with bank-level
                        encryption and fortified by robust protocols such as IPSec and OpenVPN. As an extra layer of
                        protection, a kill switch is in place to provide double insurance for your online connection,
                        guaranteeing your peace of mind.</p>
                    <div class="btn btn-warning text-light mt-3">
                        <a class="text-light fw-bolder" id="price" href="#price">Get {{ env('APP_NAME') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-courses price_plan_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="tabs">
                            <div class="row">
                                <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
                                <section class="price_plan_area section_padding_130_80" id="pricing">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-center g-2">
                                            <div class="col-lg-12">
                                                <div class="section-heading">
                                                    <h6>Subscriptions</h6>
                                                    <h4>Choose a <em>plan</em></h4>
                                                    <p>
                                                        <div class="row justify-content-center text-center">
                                                        <div class="col-md-2 col-mg-2 col-sm-12"><i class="fa-solid fa-check"></i> 100+ VPN Servers</div>
                                                    <div class="col-md-2 col-mg-2 col-sm-12"><i class="fa-solid fa-check"></i> 24/7 Live Support</div>
                                                      </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <!-- Single Price Plan Area-->
                                            <?php
                                                $i = count($plans);
                                            ?>
                                            @foreach ($plans as $plan)
                                            @php
                                            $i--;
                                            @endphp
                                                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                                                    <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s"
                                                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                                        @if ($plan->is_popular)
                                                            <div class="side-shape"><img
                                                                    src="https://bootdey.com/img/popular-pricing.png"
                                                                    alt=""></div>
                                                        @endif
                                                        <div class="title">
                                                            @if ($plan->is_popular)
                                                                <span>Popular</span>
                                                            @endif
                                                            <h3>{{ $plan->title }}</h3>
                                                            <div class="line"></div>
                                                        </div>
                                                        <div class="price">
                                                            <h4>${{ $plan->price }}</h4>
                                                        </div>
                                                        <div class="description">
                                                            <p><i class="lni lni-checkmark-circle"></i>Duration: {{ $plan->days }} days</p>
                                                        </div>
                                                        <div @if($i == 0) id="feature" @endif class="button"><a @class([
                                                            'btn',
                                                            'btn-2',
                                                            'btn-success' => $plan->is_popular == 0,
                                                            'btn-warning' => $plan->is_popular != 0,
                                                        ])
                                                                href="{{ route('payment', ['plan' => $plan->id]) }}">Get
                                                                Started</a></div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                                <style>
                                    body {
                                        margin-top: 20px;
                                    }

                                    .price_plan_area {
                                        position: relative;
                                        z-index: 1;
                                        background-color: #f5f5ff;
                                    }

                                    .single_price_plan {
                                        position: relative;
                                        z-index: 1;
                                        border-radius: 0.5rem 0.5rem 0 0;
                                        -webkit-transition-duration: 500ms;
                                        transition-duration: 500ms;
                                        margin-bottom: 50px;
                                        background-color: #ffffff;
                                        padding: 3rem 4rem;
                                    }

                                    @media only screen and (min-width: 992px) and (max-width: 1199px) {
                                        .single_price_plan {
                                            padding: 3rem;
                                        }
                                    }

                                    @media only screen and (max-width: 575px) {
                                        .single_price_plan {
                                            padding: 3rem;
                                        }
                                    }

                                    .single_price_plan::after {
                                        position: absolute;
                                        content: "";
                                        background-image: url("https://bootdey.com/img/half-circle-pricing.png");
                                        background-repeat: repeat;
                                        width: 100%;
                                        height: 17px;
                                        bottom: -17px;
                                        z-index: 1;
                                        left: 0;
                                    }

                                    .single_price_plan .title {
                                        text-transform: capitalize;
                                        -webkit-transition-duration: 500ms;
                                        transition-duration: 500ms;
                                        margin-bottom: 2rem;
                                    }

                                    .single_price_plan .title span {
                                        color: #ffffff;
                                        padding: 0.2rem 0.6rem;
                                        font-size: 12px;
                                        text-transform: uppercase;
                                        background-color: #2ecc71;
                                        display: inline-block;
                                        margin-bottom: 0.5rem;
                                        border-radius: 0.25rem;
                                    }

                                    .single_price_plan .title h3 {
                                        font-size: 1.25rem;
                                    }

                                    .single_price_plan .title p {
                                        font-weight: 300;
                                        line-height: 1;
                                        font-size: 14px;
                                    }

                                    .single_price_plan .title .line {
                                        width: 80px;
                                        height: 4px;
                                        border-radius: 10px;
                                        background-color: #3f43fd;
                                    }

                                    .single_price_plan .price {
                                        margin-bottom: 1.5rem;
                                    }

                                    .single_price_plan .price h4 {
                                        position: relative;
                                        z-index: 1;
                                        font-size: 2.4rem;
                                        line-height: 1;
                                        margin-bottom: 0;
                                        color: #3f43fd;
                                        display: inline-block;
                                        -webkit-background-clip: text;
                                        -webkit-text-fill-color: transparent;
                                        background-color: transparent;
                                        background-image: -webkit-gradient(linear, left top, right top, from(#e24997), to(#2d2ed4));
                                        background-image: linear-gradient(90deg, #e24997, #2d2ed4);
                                    }

                                    .single_price_plan .description {
                                        position: relative;
                                        margin-bottom: 1.5rem;
                                    }

                                    .single_price_plan .description p {
                                        line-height: 16px;
                                        margin: 0;
                                        padding: 10px 0;
                                        display: -webkit-box;
                                        display: -ms-flexbox;
                                        display: flex;
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        -ms-grid-row-align: center;
                                        align-items: center;
                                    }

                                    .single_price_plan .description p i {
                                        color: #2ecc71;
                                        margin-right: 0.5rem;
                                    }

                                    .single_price_plan .description p .lni-close {
                                        color: #e74c3c;
                                    }

                                    .single_price_plan.active,
                                    .single_price_plan:hover,
                                    .single_price_plan:focus {
                                        -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
                                        box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
                                    }

                                    .single_price_plan .side-shape img {
                                        position: absolute;
                                        width: auto;
                                        top: 0;
                                        right: 0;
                                        z-index: -2;
                                    }

                                    .section-heading h3 {
                                        margin-bottom: 1rem;
                                        font-size: 3.125rem;
                                        letter-spacing: -1px;
                                    }

                                    .section-heading p {
                                        margin-bottom: 0;
                                        font-size: 1.25rem;
                                    }

                                    .section-heading .line {
                                        width: 120px;
                                        height: 5px;
                                        margin: 30px auto 0;
                                        border-radius: 6px;
                                        background: #2d2ed4;
                                        background: -webkit-gradient(linear, left top, right top, from(#e24997), to(#2d2ed4));
                                        background: linear-gradient(to right, #e24997, #2d2ed4);
                                    }
                                </style>
                                {{-- <div class="col-4">
                                  <div class="card">
                                    <div class="card-header">
                                      7 days plan
                                    </div>
                                    <div class="card-body">
                                      <h4 class="card-title fs-3 fw-bold">$ 4.17 <span class="text-muted fs-5">/day</span></h4>
                                      <p class="card-text">Text</p>
                                    </div>
                                  </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="tabs">
                            <div class="row">
                                <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
                                <section class="section_padding_130_80" id="pricing">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-center g-2">
                                            <div class="col-lg-12">
                                                <div class="section-heading">
                                                    {{-- <h6>Subscriptions</h6> --}}
                                                    <h4>Why Choose a <em>{{ env('APP_NAME') }}</em>?</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <!-- Single Price Plan Area-->
                                            <div class="col-lg-5 px-3">
                                                <div class="row mb-3 justify-content-center align-items-center g-2">
                                                    <div class="col-2"><i
                                                            class="fa-solid fa-rocket fs-1 text-warning"></i></div>
                                                    <div class="col-10">
                                                        <span class="fw-bold">Ultra-fast speed</span>
                                                        <span class="text-muted">Access any websites and content
                                                            without buffering, fast enough to stream full HD video
                                                            content</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 justify-content-center align-items-center g-2">
                                                    <div class="col-2"><i
                                                            class="fa-solid fa-location-arrow fs-1 text-warning"></i>
                                                    </div>
                                                    <div class="col-10">
                                                        <span class="fw-bold">More than 100 vpn sites</span>
                                                        <span class="text-muted">You can choose from over 100 cities in
                                                            over 30 countries. With unlimited speeds and unlimited
                                                            server switches, you can connect from anywhere in the
                                                            world.</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 justify-content-center align-items-center g-2">
                                                    <div class="col-2"><i
                                                            class="fa-brands fa-youtube fs-1 text-warning"></i>
                                                    </div>
                                                    <div class="col-10">
                                                        <span class="fw-bold">Access blocked content</span>
                                                        <span class="text-muted">Enjoy the freedom to access blocked
                                                            internet content anytime and anywhere in the world even if
                                                            it is Youtube, Netflix, Hulu, HBO or any other
                                                            content.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Price Plan Area-->
                                            <div class="col-lg-5 py-3 px-3">
                                                <div class="row mb-3 justify-content-center align-items-center g-2">
                                                    <div class="col-2"><i class="fa-solid fa-link fs-1 text-warning"></i>
                                                    </div>
                                                    <div class="col-10">
                                                        <span class="fw-bold">Connect with one click</span>
                                                        <span class="text-muted">Our user-friendly design makes using a
                                                            VPN simple! Just click on the 'Connect' button to connect to
                                                            the fastest server</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 justify-content-center align-items-center g-2">
                                                    <div class="col-2"><i
                                                            class="fs-2 fw-bold text-warning">24<sub>/7</sub></i>
                                                    </div>
                                                    <div class="col-10">
                                                        <span class="fw-bold">24/7 support </span>
                                                        <span class="text-muted">Our professional VPN experts are available 24/7 in all languages</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 justify-content-center align-items-center g-2">
                                                    <div class="col-2"><i
                                                            class="fa-solid fa-shield-halved fs-1 text-warning"></i>
                                                    </div>
                                                    <div class="col-10">
                                                        <span class="fw-bold">Strong encryption and security features
                                                        </span>
                                                        <span class="text-muted">We use best-in-class 256-bit AES
                                                            encryption to keep your entire connection safe from
                                                            attackers</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us" id="contact-section">
        <div class="container">
            <div class="row">


                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="tabs">
                            <div class="row">
                                <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
                                <section class="section_padding_130_80" id="pricing">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-center g-2">
                                            <div class="col-lg-12">
                                                <div style="height: 430px;" class="section-heading">
                                                    {{-- <h6>Subscriptions</h6> --}}
                                                    <h4>Let's Get In <em>Touch</em>!</h4>
                                                    <p>Ready to contact us? That's great! send us an email and we will
                                                        get back to you as soon as possible!</p>
                                                    <div class="row justify-content-center align-items-center g-2 mt-3">
                                                        <div class="col-lg-3 col-sm-8">
                                                            <div class="card text-center">
                                                                <div class="card-body">
                                                                    <h4 class="card-title fs-1"><i
                                                                            class="fa-regular fa-envelope"></i></h4>
                                                                    <p class="card-text"><a
                                                                            href="mailto:info@miloconnected.com">info@miloconnected.com</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-5">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa-brands fa-app-store"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-google-play"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
