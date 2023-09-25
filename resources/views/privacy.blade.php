@extends('layouts.master')
@section('content')
    <section class="main-banner mb-5" id="top">
        {{-- <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <h1>Privacy Policy </h1>
            </div>
        </div> --}}
        <div class="container mt-4">
            <div class="row justify-content-center align-items-center g-2">
                {{-- <h3>What is <span style="color: var(--primary-color);">VPN</span>? </h3> --}}
                <p class="fs-5 mt-2 ps-4">We stand behind our commitment to user privacy and security. When you use our
                    {{ env('APP_NAME') }} and
                    services, you’ll share some information with us, which we use to provide and improve those products and
                    services, send notifications and updates, want to support our free product through advertising. Our goal
                    is to be upfront about what we collect, how we use it, and whom we share it with, that’s why we’ve
                    written this Privacy Policy. If you have any questions about anything in this Policy, please contact us
                    a.s.a.p. at info@miloconnected.com.
                </p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>Security & privacy </h3>
                <p class="fs-5 mt-2 ps-4">All of the traffic is encrypted between your device and our servers using TLS 1.2
                    with
                    perfect 256-bit AES data encryption.</p>
                <p class="fs-5 mt-2 ps-4">All of the traffic on unsecured networks such as public Wi-Fi airports, etc. is
                    always
                    securely encrypted by {{ env('APP_NAME') }}.</p>
                <p class="fs-5 mt-2 ps-4">{{ env('APP_NAME') }} will never store, log, or share your true IP address, and we
                    always
                    delete your
                    true IP address after your VPN session is closed
                </p>
                <p class="fs-5 mt-2 ps-4">{{ env('APP_NAME') }} never associates your true IP address or unique mobile ID
                    with your
                    browsing
                    information or online activities when you are using.</p>
                <p class="fs-5 mt-2 ps-4">This privacy policy governs the manner in which {{ env('APP_NAME') }} Ltd.
                    collects, uses,
                    maintains and
                    discloses information collected from users (each, a "user") of the www.miloconnected.com website. This
                    privacy policy applies to the site and all products and services offered by {{ env('APP_NAME') }} Ltd.
                </p>
            </div>
            <div class="container mt-4">
                <div class="row justify-content-center align-items-center g-2">
                    <h3>What information do we collect? </h3>
                    <p class="fs-5 mt-2 ps-4">
                        Information you share to us, and it’s always optional
                        When you interact with our Services, we collect the information that you choose to share with us.
                    </p>
                    <p class="fs-5 mt-2 ps-4">
                        If you contact us directly while you meet some trouble, we may receive additional information about
                        you. For example, when you contact customer support, we receive the contents of messages or
                        attachments that you send to us, and other information you choose to provide.
                    </p>
                    <p class="fs-5 mt-2 ps-4">
                        Information when you use our services
                        When you launch {{ env('APP_NAME') }} to use our Services, we collect information about you or your device
                        automatically.
                    </p>
                    <p class="fs-5 mt-2 ps-4">
                        We collect your IP address, immediately obfuscate and anonymize it, and provide you with a virtual
                        or proxy IP address. We may also use your IP address to derive your approximate location in order to
                        effectively provide the Services. Again, your true IP address is stored only for the duration of
                        your VPN session and is cleared after your session is closed. We do not associate your true IP
                        address with your online activities and we do not store or log your true IP address after the end of
                        your session.
                    </p>
                    <p class="fs-5 mt-2 ps-4">
                        When you launch {{ env('APP_NAME') }}, we also collect device-specific information, such as the hardware model,
                        operating system version, browser type, language, wireless network, and mobile network information.
                        This information does not identify you, and we use it to provide and improve the Services, and
                        perform analytics on our services.
                    </p>
                    <p class="fs-5 mt-2 ps-4">
                        When you use {{ env('APP_NAME') }} to access the internet, we can’t collect any anonymous, aggregate data about
                        which websites you visit and which apps you use.
                    </p>
                    <p class="fs-5 mt-2 ps-4">
                        You may see some generic ads from google and facebook that our ad partners place in front of certain
                        apps. Keep in mind that we do not target these ads based on your personal information.
                    </p>
                    <p class="fs-5 mt-2 ps-4">
                        {{ env('APP_NAME') }} does not share your IP address, browsing history, or any other information you choose to
                        provide, with advertisers. Nevertheless, advertisers may be able to collect certain information
                        independently from you or your device when serving ads from the {{ env('APP_NAME') }} app, including your
                        device’s advertising ID, IMEI, MAC address, and wireless carrier.
                    </p>
                    <p class="fs-5 mt-2 ps-4">
                        For more information regarding your device’s advertising ID and its options, please visit
                        https://support.google.com/googleplay/answer/3405269, email address: info@miloconnected.com for
                        Android devices or https://support.apple.com/en-us/HT202074 for iOS devices.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>How do we use your information? </h3>
                <p class="fs-5 mt-2 ps-4">we use your information to provide you with amazing products and services that we
                    are constantly working to improve.
                </p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>Here are some of the ways we do that: </h3>
                <ul class="list-group">
                    <li class="list-group-item">- To operate, maintain, enhance and provide features of the Services,
                        provide
                        services and information that you request, respond to comments and questions, and otherwise provide
                        support to users.
                    </li>
                    <li class="list-group-item">- Contact you for administrative and informational purposes. This may
                        include providing customer service or sending communications, including changes to our terms,
                        conditions, and policies.
                    </li>
                </ul>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>How do we share your information? </h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        We only share your information as described in this privacy policy in order to provide and improve
                        the Services, facilitate a merger of our business, or if required to do so by law.
                    </li>
                    <li class="list-group-item">
                        Compliance with children's online privacy protection act
                        <p class="px-3">Protecting the privacy of the very young is especially important. For that reason,
                            we never collect
                            or maintain information on our site from those we actually know are under 13, and no part of our
                            website is structured to attract anyone under 13.</p>
                    </li>
                </ul>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>Changes to this privacy policy </h3>
                <p class="fs-5 mt-2 ps-4">
                    {{ env('APP_NAME') }} Ltd. has the discretion to update this privacy policy at any time. When we do, we will revise
                    the updated date at the bottom of this page. We encourage users to frequently check this page for any
                    changes to stay informed about how we are helping to protect the personal information we collect. You
                    acknowledge and agree that it is your responsibility to review this privacy policy periodically and
                    become aware of modifications.
                </p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>Your acceptance of these terms </h3>
                <p class="fs-5 mt-2 ps-4">
                    By using this site, you signify your acceptance of this policy and terms of service. If you do not agree
                    this policy, please do not use our site. Your continued use of the site following the posting of changes
                    to this policy will be deemed your acceptance of those changes.
                </p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>Contacting us </h3>
                <p class="fs-5 mt-2 ps-4">
                    If you have any questions about this privacy policy, the practices of this site, or your dealings with
                    this site, please contact us at: {{ env('APP_NAME') }} Ltd.
                </p>
                <p class="fs-5 mt-2 ps-4">Email address: <a href="mailto:info@miloconnected.com">info@miloconnected.com</a></p>
            </div>
    </section>
@endsection
