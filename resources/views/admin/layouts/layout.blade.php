<?php
$lang = app()->getLocale() == 'ar' ? '-rtl' : '';
?>
<!DOCTYPE html>
{{-- <html lang="{{ app()->getLocale() }}"
data-textdirection="{{ app()->getLocale() == "ar" ? 'rtl' : 'ltr' }}"
> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}"
    class="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @trixassets

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css{{ $lang }}"
        rel="stylesheet" />
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <!-- <link href="{{ asset('admin/css/animation.css') }}" rel="stylesheet" /> -->

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <div class="spec-nav container d-flex justify-content-lg-between px-5">
            <!-- Navbar-->
            <!-- Sidebar Toggle-->
            <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                    class="fas fa-bars"></i></button> -->

            <a class="btn btn-primary menu-mobile-btn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                menu
            </a>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="nav nav-mobile">

                        <a class="nav-link" href="{{ route('home-page') }}">
                            <i class="fa fa-credit-card px-2"></i>
                            {{ __('words.website') }}
                        </a>
                        <a class="nav-link" href="{{ url('/admin') }}">
                            <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-house-chimney"></i></div>
                            {{ __('words.home') }}
                        </a>

                        <a class="nav-link" href="{{ route('events.index') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-days"></i></div>
                            {{ __('words.events') }}
                        </a>

                        <a class="nav-link" href="{{ route('sliders.index') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-sliders"></i></div>
                            {{ __('words.sliders') }}
                        </a>
                        <a class="nav-link" href="{{ route('exhibitions.index') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-panorama"></i></div>
                            {{ __('words.exhibitions') }}
                        </a>
                        <a class="nav-link" href="{{ route('services.index') }}">
                            <div class="sb-nav-link-icon"><i class="fa-brands fa-servicestack"></i>
                            </div>
                            {{ __('words.services') }}
                        </a>
                        <a class="nav-link" href="{{ route('mediaExhibitions.index') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-panorama"></i></div>
                            {{ __('words.media') }}
                        </a>

                        <a class="nav-link" href="{{ route('partners.index') }}">
                            <div class="sb-nav-link-icon"><i class="fa-regular fa-handshake"></i>
                            </div>
                            {{ __('words.partners') }}
                        </a>
                        <a class="nav-link" href="{{ route('all_contact-us') }}">
                            <div class="sb-nav-link-icon"><i class="fa-regular fa-address-card"></i></div>
                            {{ __('words.contact_us') }}
                        </a>
                        <a class="nav-link" href="{{ route('settings') }}">
                            <div class="sb-nav-link-icon"><i class="fa fa-cog" aria-hidden="true"></i>
                            </div>
                            {{ __('words.settings') }}
                        </a>

                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center end-flex ">

                <ul class="Localization">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if (app()->getLocale() != $localeCode)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
           
                
                <li class="nav-item dropdown mb-3 ">
                    <a class="nav-link dropdown-toggle text-white

                .text-black-50" id="navbarDropdown"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">   
                        <img class="img-heightServices py-3 mb-2 img-radius " width="50px" 
                        height="80px" src="{{ asset('media/media/' . auth()->user()->media ) }}" alt="media"> 
                    </i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="text-black px-3 " href="{{ route('profile-edit') }}">{{ __('words.profile') }}</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">        
                                {{ __('words.logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                
                </ul>

            </div>
        </div>
    </nav>
    <div id="layoutSidenav">
        @include('admin.layouts.sidebar')
        @yield('body')


        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-center small">
                    <div class="text-muted">{{ __('words.Copyright') }} &copy; {{ __('words.Your Website') }} 2023
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

    <script src="js/datatables-simple-demo.js"></script>
    <script src="{{ asset('admin/js/wow.min.js') }}"></script>
    <script>
        $('#delete_service').on('show.bs.modal', function(service) {

            var button = $(service.relatedTarget)
            var service_id = button.data('service_id')
            var modal = $(this)
            modal.find('.modal-body #service_id').val(service_id);
        })
        $('#delete_event').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var event_id = button.data('event_id')
            var modal = $(this)
            modal.find('.modal-body #event_id').val(event_id);
        })
        $('#delete_slider').on('show.bs.modal', function(slider) {

            var button = $(slider.relatedTarget)
            var slider_id = button.data('slider_id')
            var modal = $(this)
            modal.find('.modal-body #slider_id').val(slider_id);
        })
        $('#delete_client').on('show.bs.modal', function(client) {

            var button = $(client.relatedTarget)
            var client_id = button.data('client_id')
            var modal = $(this)
            modal.find('.modal-body #client_id').val(client_id);
        })

        $('#delete_partner').on('show.bs.modal', function(partner) {

            var button = $(partner.relatedTarget)
            var partner_id = button.data('partner_id')
            var modal = $(this)
            modal.find('.modal-body #partner_id').val(partner_id);
        })

        $('#delete_contact').on('show.bs.modal', function(contact) {

            var button = $(contact.relatedTarget)
            var contact_id = button.data('contact_id')
            var modal = $(this)
            modal.find('.modal-body #contact_id').val(contact_id);
        })
        $('#delete_exhibition').on('show.bs.modal', function(exhibition) {

            var button = $(exhibition.relatedTarget)
            var exhibition_id = button.data('exhibition_id')
            var modal = $(this)
            modal.find('.modal-body #exhibition_id').val(exhibition_id);
        })
        $('#delete_media').on('show.bs.modal', function(media) {

            var button = $(media.relatedTarget)
            var media_id = button.data('media_id')
            var modal = $(this)
            modal.find('.modal-body #media_id').val(media_id);
        })
        $(function() {
            setTimeout(() => {
                $("#alert-hide").hide(1000);
            }, 3000);


        })

        // $(function() {
        //     new WOW().init();

        // })
    </script>
</body>

</html>
