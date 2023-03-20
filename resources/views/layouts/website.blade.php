<?php
$lang = app()->getLocale() == 'ar' ? '-rtl' : '';
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}" class="ltr">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('website/img/core-img/favicon.png') }}">

    <link rel="stylesheet" href="{{asset('website/style.css')}}">
    <link href="{{ asset('admin/css/animation.css') }}" rel="stylesheet" />
    <link rel='stylesheet' href='//sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('website/style.css') }}">




</head>

</head>

<body>

    <div id="preloader">
        <div class="loader"></div>
    </div>


    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">

                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <a class="nav-brand" href="#"><img src="{{ asset('media/media/logo-360w.webp') }}" width="60%" alt=""></a>



                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>


                    <div class="classy-menu">

                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>


                        @php
                        $link = basename($_SERVER['PHP_SELF'], '.php');
                        @endphp
                        <div class="classynav">
                            <ul id="nav">
                                <li <?php
                                    if ($link == app()->getLocale()) {
                                        echo 'class="active"';
                                    } ?>><a href="{{ route('home-page') }}">{{ __('words.home') }}</a>
                                </li>

                                <li <?php
                                    if ($link == 'all-events') {
                                        echo 'class="active"';
                                    } ?>><a href="{{ route('all-events') }}">{{ __('words.events') }}</a>
                                </li>
                                <li <?php
                                    if ($link == 'all-exhibitions') {
                                        echo 'class="active"';
                                    } ?>><a href="{{ route('all-exhibitions') }}">{{ __('words.exhibitions') }}</a></li>
                                <li <?php
                                    if ($link == 'contact-us') {
                                        echo 'class="active"';
                                    } ?>><a href="{{ route('contact-us') }}">{{ __('words.Contact') }}</a></li>
                                <li <?php
                                    if ($link == 'all-services') {
                                        echo 'class="active"';
                                    } ?>><a href="{{ route('all-services') }}">{{ __('words.Services') }}</a></li>
                            </ul>

                            <ul class="Localization">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if (app()->getLocale() != $localeCode)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                                @endif
                                @endforeach
                            </ul>

                        </div>
                </nav>
            </div>
        </div>
    </header>

    @yield('content')


    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">

        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">

                            <h5 class="widget-title">{{ __('words.our pages') }}</h5>

                            <div class="social-info">
                                <a href="{{ \App\Models\Section::where('key', 'facebook')->first()->value }}"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="{{ \App\Models\Section::where('key', 'instagram')->first()->value }}"><i class="zmdi zmdi-instagram"></i></a>
                                <a href="{{ \App\Models\Section::where('key', 'twitter')->first()->value }}"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="{{ \App\Models\Section::where('key', 'linkedin')->first()->value }}"><i class="zmdi zmdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">

                            <h5 class="widget-title">{{ __('words.contact_us') }}</h5>

                            <div class="footer-contact-info">
                                <p><i class="zmdi zmdi-map"></i>
                                    {{ \App\Models\Section::where('key', 'address')->first()->value }}
                                </p>
                                <p><i class="zmdi zmdi-phone"></i>
                                    {{ \App\Models\Section::where('key', 'phone')->first()->value }}
                                </p>
                                <p><i class="zmdi zmdi-email"></i>
                                    <a href="#" style="color:#9293bc">
                                        {{ \App\Models\Section::where('key', 'email')->first()->value }}
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">


                            <ul class="footer-nav">
                                <li><a href="{{ route('home-page') }}">{{ __('words.home') }}</a></li>

                                <li><a href="{{ route('all-events') }}">{{ __('words.events') }}</a></li>
                                <li><a href="{{ route('all-exhibitions') }}">{{ __('words.exhibitions') }}</a></li>
                                <li><a href="{{ route('contact-us') }}">{{ __('words.Contact') }}</a></li>
                                <li><a href="{{ route('all-services') }}">{{ __('words.Services') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="container">
            <div class="copywrite-content">
                <div class="row">

                    <div class="col-12 col-md-12">
                        <div class="copywrite-text  text-center">
                            {{ __('words.copyright') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>



    <script src="{{ asset('website/js/jquery.min.js') }}"></script>

    <script src="{{ asset('website/js/popper.min.js') }}"></script>

    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('website/js/confer.bundle.js') }}"></script>

    <script src="{{ asset('website/js/default-assets/active.js') }}"></script>
    <script src="{{ asset('website/js/wow.min.js') }}"></script>


    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <script src='//sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>


    <script>
        $(function() {
            new WOW().init();
            let loading = $(".loading-content")
            loading.fadeOut(1000)
            setTimeout(() => {
                loading.remove()
            }, 1000);


            new WOW().init();
            $('#lightSlider').lightSlider({
                gallery: true,
                item: 1,
                loop: true,
                slideMargin: 0,
                thumbItem: 9
            });


            setTimeout(() => {
                $("#success-alert").hide(1000);
            }, 3000);


            $(".owl-next").html(`<i class="zmdi zmdi-long-arrow-right righting"></i>`)
            $(".owl-prev").html(`<i class="zmdi zmdi-long-arrow-right lefting"></i>`)
        })
    </script>
</body>


</html>