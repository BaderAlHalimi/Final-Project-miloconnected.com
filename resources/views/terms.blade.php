@extends('layouts.master')
@section('content')
    <section class="main-banner mb-5" id="top">
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <h1>Terms of use</h1>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row justify-content-center align-items-center g-2">
                <h3>These are the terms of service you are agreeing to when you enroll in and/or when you are using the
                    services of {{ env('APP_NAME') }} and {{ env('APP_NAME') }}.com.</h3>
                <p class="fs-5">Please Note in this agreement, the term "You" means the "User", and the term "We" or "Our"
                    means {{ env('APP_NAME') }} , its owners, employees, agents, and any others involved with VPN.

                </p>
                <p class="fs-5">We are obliged to take all measures to provide services to you with minimum downtime
                </p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>The information you provide when you connect and use the service, has access only to employees of
                    {{ env('APP_NAME') }}. Your information may be used only by us to provide our services to you. We
                    respect your privacy and
                    will not share it with the third person, except in the following situations: </h3>
                <p class="fs-5">
                    - At the request of law enforcement agencies in compliance with all procedures established by
                    law.
                </p>
                <p class="fs-5">
                    - The user has violated the rules for the use of the service.
                </p>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h4>You agree that you will not run any resource intensive programs that will interfere in the usage of our
                    services by our users. You agree that you will not hog the bandwidth of our servers. We reserve the
                    right limit bandwidth of your account if you transfer more than 2GB in one day.</h4>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h4>You agree that our services offered to you are provided as a "as is" basis, with no warranties
                    whatsoever. We are not liable for any direct, indirect, consequential, inconveniences, or whatsoever
                    damages, or loss of profit that may arise from the use of our services.</h4>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h4>
                    We cannot and do not guarantee the speed of our services. We also cannot and do not guarantee that you
                    will have uninterrupted services. We have no control and cannot guarantee on how the internet will
                    perform in your area. We are not liable for any direct, indirect, consequential, inconveniences, or
                    whatsoever damages, or loss of profit, that may arise from the use of our services. No refunds will be
                    given if you are dissatisfied with our services.
                </h4>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h4>
                    We are not in any shape or form liable for damages of any sort (realized or unrealized) resulting from
                    the use of, or through the use of, or arising from the use of, or the inability to use the
                    {{ env('APP_NAME') }} or
                    miloconnected.com services.
                </h4>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h4>
                    Log files stored on our servers are only used for monitoring server performance, identifying software
                    bugs, identifying any potential security breaches, and for the purpose of identifying abusive users. The
                    log files are not used for monitoring or censoring your internet activities. We respect your privacy. We
                    are not interested in what you do on the internet.
                </h4>
            </div>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h3>You agree: </h3>
                <p class="fs-5">
                    - You will not use our services to hack or attack other computers, servers, or networks on the internet.
                    You will not to hack our servers and resources.
                </p>
                <p class="fs-5">
                    - You will not use our services to scan (e.g. port scanning, running proxy hunters) or break into other
                    computers, servers, or networks on the internet.
                </p>
                <p class="fs-5">
                    - You will not use our services to transmit viruses/Trojans/worms, etc. to other computers on the
                    internet.
                </p>
                <p class="fs-5">
                    - You will not to use our services for receiving and the distribution of pirated copyright materials,
                    such as, but not limited to Pirated DVDs, Pirated CDs, Pirated Softwares. This includes, but not limited
                    to the following: The trading, selling, bartering, sharing, transmitting or receiving, of such
                    materials.
                </p>
                <p class="fs-5">
                    - You will not use our services to send out unsolicited or fraudulent materials. This includes, but not
                    limited to the following: Sending unsolicited emails (i.e. SPAM mail), mass-marketing mails (even they
                    are in an opt-in list), hate mail, unsolicited instant messages, unsolicited SMS, or identity theft or
                    scam related materials, etc.
                </p>
                <p class="fs-5">
                    - You will not use our services to engage in child pornography activities of any sort. This includes,
                    but not limited to trading, bartering, selling, transmitting child pornography to others, or receiving
                    the materials from others, etc.
                </p>
                <p class="fs-5">
                    - You will not promote or encourage criminal or terrorist activities of any sort.
                </p>
                <p class="fs-5">
                    - You will not use our services to threaten or harass others.
                </p>
                <p class="fs-5">
                    - You will not use our services for any type of criminal activities.
                </p>
                <p class="fs-5">
                    - We reserve the right terminate your account without notice or refund if we receive any complaints
                    about your activities from other users, servers, companies or internet service providers.
                </p>
                <p class="fs-5">
                    - If you violate any of our terms that involve criminal activities, you will forfeit all the privacy and
                    confidentiality privileges that our service provides.
                </p>
                <p class="fs-5">
                    - We reserve the right to make amendments or modifications to our Terms of Use Agreement. This will
                    become binding and it will be your responsibility to periodically check for updates and abide by the
                    terms.
                </p>
            </div>

            <div class="row justify-content-center align-items-center g-2 mt-3">
                <h4>
                    Log files stored on our servers are only used for monitoring server performance, identifying software
                    bugs, identifying any potential security breaches, and for the purpose of identifying abusive users. The
                    log files are not used for monitoring or censoring your internet activities. We respect your privacy. We
                    are not interested in what you do on the internet.
                </h4>
            </div>
        </div>
    </section>
@endsection
