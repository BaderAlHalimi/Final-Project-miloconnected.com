@extends('layouts.master')
@section('content')
    <section class="main-banner mb-5" id="top">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <h1>Frequently Asked Questions <span style="color: var(--primary-color);">(FAQ)</span> </h1>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row justify-content-center align-items-center g-2">
                <h3>What is <span style="color: var(--primary-color);">VPN</span>? </h3>
                <p class="fs-5">Do you often go to the websites for
                    information but only to find them blocked? Are you
                    disturbed by the
                    low speed of the Internet? Are you afraid of being tracked or monitored by the hackers? Are you worried
                    about the safety of your important data? To solve these problems, you need {{ env('APP_NAME') }} sevice.
                </p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>What is <span style="color: var(--primary-color);">{{ env('APP_NAME') }}</span>? </h3>
                <p class="fs-5">VPN means Virtual Private Network, a secured
                    connection between two or more devices.
                    {{ env('APP_NAME') }} is a virtual private network provider that will provide a fast and secured
                    connection between your device and every website or application online allowing you to anonymously
                    appear to be anywhere you
                    choose.</p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>What Can You Do with <span style="color: var(--primary-color);">{{ env('APP_NAME') }}</span>? </h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h4>Hide and Encrypt Your Information </h4>
                        <p class="fs-5 mt-2 ps-4">You can choose among any of
                            our VPN server locations in Asia, US, UK, DE,
                            FR or
                            any of over 30+ countries worldwide. When connected, your ISP only sees encrypted traffic
                            passing to our VPN servers. Our VPN uses high strength 256-bit encryption to protect your
                            personal data from prying eyes. Browse freely from Wi-Fi hotspots with the comfort that you
                            can't be tracked or monitored,they cannot decipher the data or know the websites you have
                            visited.</p>
                    </li>
                    <li class="list-group-item">
                        <h4>Access Blocked Content and Websites </h4>
                        <p class="fs-5 mt-2 ps-4">In some countries, Facebook,
                            Twitter, YouTube and other websites are
                            blocked due to political or other reasons, and we've optimized our network to provide you a
                            reliable connection and you can enjoy your favorite videos and chat with your friends and family
                            without any interruptions.
                        </p>
                    </li>
                </ul>

            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>Why Can't I Connect to <span style="color: var(--primary-color);">VPN</span>? </h3>
                <p class="fs-5 mt-2 ps-4">First of all, you have to ensure
                    that your local network connect to the Internet.
                    Because VPN is a local network connection based service, if your local network can not work, VPN
                    services will not work, either. To determine whether your local network is normal, please exit VPN then
                    open your Web browser to see if you can visit the website as you usually do. Secondly, if your local
                    network connection is normal, please re-open VPN then login username and password to see if there is an
                    message prompting error in entering. If so, please enter the correct account information. Thridly,
                    please make sure that your VPN service has not expired. If it expires, please complete the renewal as
                    required. Finally, sometimes our VPN server may be temporarily interrupted. If you are sure that there
                    are no problems with the above, please re-choose a VPN server and re-connect. If you still can not
                    connect, please contact our online customer service via support email.
                </p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>Why is My <span style="color: var(--primary-color);">VPN</span>Connection Slow? </h3>
                <p class="fs-5 mt-2 ps-4">When you use the
                    {{ env('APP_NAME') }} service, all the network connections on
                    your device will
                    go through our servers. So your VPN connection speed depends on the following three aspects:
                </p>
                <p class="fs-5 mt-2 ps-4"><span class="fw-bold">Your local
                        network connection speed.</span> If your local
                    network connection is slow then
                    connecting to VPN will never be fast. So, when you find the VPN connection is slow, first make sure your
                    local network connection is normal.
                </p>
                <p class="fs-5 mt-2 ps-4"><span class="fw-bold">The speed of
                        your local network access to our VPN
                        server.</span> If you live in Asia,
                    please use servers in Hongkong, Korean or the western part of the United States (such as Los Angeles,
                    San Francisco and Boston). If you live in the Middle East, please use servers in Netherlands, the United
                    Kingdom or the eastern part of the United States (such as New York, Washington and Miami). If you live
                    in South America, choose a US or Canadian server to connect. In short, you should choose a server that
                    is the closest to your location and to connect. By doing so, the connecting speeed to our server will be
                    much better.
                </p>
                <p class="fs-5 mt-2 ps-4"><span class="fw-bold">Speed of the
                        network you are accessing or response speed of
                        the service on our
                        server's.</span> In general, websites you want access or serve in which country, you shall try to
                    choose a
                    server near this country. For example, the US server would be the best if you want to watch Youtube
                    videos. When you find your VPN connection is slow, you should follow the above principles to select a
                    new server and re-connect. If still very slow, please contact our online customer service through our
                    Email.
                </p>
            </div>
        </div>
    </section>
@endsection
