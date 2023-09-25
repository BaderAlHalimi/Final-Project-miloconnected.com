<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-eduwell-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/imgs/logo.png') }}" type="image/x-icon">
    <style>
        :root {
            --primary-color: #e59ec6;
        }
    </style>
</head>

<body>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('home') }}" class="logo fs-4"
                            style="font-family: 'Caprasimo', cursive;font-style: normal">
                            <img style="width: 60px; padding:10px;border-radius: 12px;text-transform: lowercase;"
                                src="{{ asset('assets') }}/imgs/logo.png" alt="Loon VPN">
                            <span style="text-transform: none;font-style: normal">{{ env('APP_NAME') }}</span>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav sub-menu" id="sub-menu-1">
                            <li>
                                <button onclick="menuTrigger()" style="border:none;background:none; width:100%;">
                                <a class="fw-bold" href="{{ route('home') }}#top" class="active">Home</a>
                                </button>
                            </li>
                            <li><button onclick="menuTrigger()" style="background-color: transparent; width:100%; border:none;background:none;"><a class="fw-bold" href="{{ route('home') }}#price">Pricing</a></button></li>
                            <li><button onclick="menuTrigger()" style="background-color: transparent; width:100%; border:none;background:none;"><a class="fw-bold" href="{{ route('home') }}#feature">Features</a></button></li>
                            <li class="has-sub">
                                <a class="fw-bold" href="javascript:void(0)">Help</a>
                                <ul class="sub-menu">
                                    <li><button onclick="menuTrigger()" style="background-color: transparent; width:100%; border:none;background:none;"><a href="{{ route('about_page') }}">About us</a></button></li>
                                    <li><button onclick="menuTrigger()" style="background-color: transparent; width:100%; border:none;background:none;"><a href="{{ route('faq_page') }}">FAQ</a></button></li>
                                    <li><button onclick="menuTrigger()" style="background-color: transparent; width:100%; border:none;background:none;"><a href="{{ route('privacy_page') }}">Praivacy Policies</a></button></li>
                                    <li><button onclick="menuTrigger()" style="background-color: transparent; width:100%; border:none;background:none;"><a href="{{ route('terms_page') }}">Terms of use</a></button></li>
                                </ul>
                            </li>
                            <li><button onclick="menuTrigger()" style="background-color: transparent; width:100%; border:none;background:none;"><a class="fw-bold" href="{{ route('home') }}#contact-section">Contact Us</a></button></li>

                            @if (Route::has('login'))
                                @auth
                                    <li><button onclick="menuTrigger()" style="background-color: transparent; width:100%; border:none;background:none;"><a class="fw-bold" href="{{ url('/dashboard') }}">Dashboard</a></button></li>
                                @else
                                    <li><button onclick="menuTrigger()" style="background-color: transparent; width:100%; border:none;background:none;"><a class="fw-bold" href="{{ route('login') }}">Login</a></button></li>

                                    @if (Route::has('register'))
                                        <li><button onclick="menuTrigger()" style="background-color: transparent; width:100%; border:none;background:none;"><a class="fw-bold" href="{{ route('register') }}">Register</a></button></li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                        <a class="menu-trigger" id="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    @yield('content')

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor') }}/jquery/jquery.min.js"></script>
    <script src="{{ asset('vendor') }}/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets') }}/js/isotope.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl-carousel.js"></script>
    <script src="{{ asset('assets') }}/js/lightbox.js"></script>
    <script src="{{ asset('assets') }}/js/tabs.js"></script>
    <script src="{{ asset('assets') }}/js/video.js"></script>
    <script src="{{ asset('assets') }}/js/slick-slider.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const href = this.getAttribute('href'); // احصل على الهاش كاملاً
        const hashParts = href.split('#');
        // افصل الهاش إلى جزئين بناءً على العلامة #

        if (hashParts.length === 2) {
          const targetId = hashParts[1]; // الجزء الثاني هو معرف العنصر المستهدف
          console.log(hashParts[1])
        
          // قم بالبحث عن العنصر المستهدف في الصفحة بمعرفه
          const targetElement = document.getElementById(targetId);

          if (targetElement) {
            const offset = 100; // عدد البكسل التي تريد تخصيصها من الأعلى
            const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - offset;

            window.scrollTo({
              top: targetPosition,
              behavior: 'smooth'
            });
          } else {
            console.error(`خطأ: العنصر المستهدف بالمعرف "${targetId}" غير موجود في الصفحة.`);
          }
        } else {
          console.error('خطأ: الرابط غير صالح.');
        }
      });
    });
  });
</script>
    <script>
    
    function menuTrigger(){
        const isMobile = window.matchMedia("only screen and (max-width: 767px)").matches;
        if (isMobile) {
            document.getElementById('menu-trigger').classList.remove("active");
            document.getElementById('sub-menu-1').style.display = "none";
        }
    }


        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
    


</script>


    <script src="{{ asset('assets/js/all.min.js') }}"></script>
</body>

</html>
