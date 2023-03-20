@extends('layouts.website')
@section('title')
{{ __('words.home') }}
@stop
@section('content')

@if (\Session::has('add'))
<div class="alert alert-success alertHome" id="success-alert">
    <p>{{ \Session::get('add') }}</p>
</div>
@endif
<section class="welcome-area">

    <div class="welcome-slides owl-carousel">
        @foreach ($sliders as $index => $slider)
        <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url({{ asset('media/media/' . $slider->media) }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">

                    <div class="col-12">
                        <div class="welcome-text ">
                            <h2 data-animation="fadeInUp" data-delay="300ms">{{ $slider->title }}</h2>
                            <h6 data-animation="fadeInUp" data-delay="500ms">{{ $slider->desc }}</h6>
                            <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="icon-scroll" id="scrollDown"></div>
</section>

@foreach ($settings as $index => $setting)
<section class="about-us-countdown-area section-padding-100-0" id="about">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-md-6">
                <div class="about-content-text mb-80">
                    <h6 class="wow fadeInUp text" data-wow-delay="300ms">{{ __('words.Our message') }}</h6>
                    <h6 class="wow fadeInUp" data-wow-delay="300ms"></h6>
                    <h3 class="wow fadeInUp" data-wow-delay="300ms">{{ $setting->title }}</h3>
                    <p class="wow fadeInUp" data-wow-delay="300ms">{{ $setting->desc }}</p>

                </div>
            </div>

            <div class="col-12 col-md-6">


                <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                    <img src="{{ asset('media/media/' . $setting->media) }}" width="100%" height="100%" alt="media">

                </div>
            </div>
        </div>
    </div>

    <div class="countdown-up-area">
        <div class="container">

        </div>
    </div>
</section>
@endforeach



<section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax about-us-countdown-area" style="background-image: url({{ asset('website/img/bg-img/14.jpg') }});">
    @foreach ($settings2 as $index => $setting2)
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 ">
                <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">


                    <img src="{{ asset('media/media/' . $setting2->media) }}" width="100%" height="100%" alt="media">

                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-content-text mb-80 textColor">
                    <h6 class="wow fadeInUp" data-wow-delay="300ms">{{ __('words.Our vision') }}</h6>
                    <h6 class="wow fadeInUp" data-wow-delay="300ms"></h6>
                    <h3 class="wow fadeInUp" data-wow-delay="300ms">{{ $setting2->title }}</h3>
                    <p class="wow fadeInUp textColor" data-wow-delay="300ms">{{ $setting2->desc }}</p>
                </div>
            </div>


        </div>
    </div>

    <div class="countdown-up-area">
        <div class="container">

        </div>
    </div>
    @endforeach
</section>


<section class="our-sponsor-client-area section-padding-100">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                    <p>{{ __('words.partners') }} &amp; {{ __('words.Sponsors') }}</p>
                    <h4>{{ __('words.partners') }}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="our-sponsor-area d-flex flex-wrap">
                    @foreach ($partners as $index => $partner)
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <p class="color partners">{{ $partner->title }}</p>

                        <br>
                        <a href="{{ $partner->link }}"><img src="{{ asset('media/media/' . $partner->media) }}" alt="media">
                            {{-- <h4></h4>  --}}
                        </a>

                    </div>
                    @endforeach
                </div>
            </div>






            <div class="col-12">
                <div class="our-client-area mt-100 wow fadeInUp" data-wow-delay="300ms">

                    <div class="client-area owl-carousel">
                        @foreach ($clients as $index => $client)

                        <div class="single-client-content">

                            <div class="single-client-text">
                                <p>{{ $client->desc }}</p>

                                <div class="single-client-thumb-info d-flex align-items-center">

                                    <div class="single-client-thumb">
                                        <img src="{{ asset('media/media/' . $client->media) }}" alt="media">
                                    </div>

                                    <div class="client-info">
                                        <!-- <h6>{{ $client->title }}</h6> -->
                                        <p>{{ $client->title }}</p>
                                    </div>
                                </div>
                            </div>


                            <div class="client-icon">
                                <i class="zmdi zmdi-quote"></i>
                            </div>

                        </div>@endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-blog-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url({{ asset('website/img/bg-img/17.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">

                    <h4>{{ __('words.events') }}</h4>
                </div>
            </div>
            @foreach ($events as $index => $event)
            <div class="col-12 col-md-6 col-lg-4 height">
                <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">

                    <div class="single-blog-thumb">
                        <img class="img-height" src="{{ asset('media/media/' . $event->media) }}" alt="media">

                    </div>
                    <div class="single-blog-text text-center">
                        <a class="blog-title" href="{{ route('single-events', $event->id) }}">{{ $event->name }}</a>

                        <div class="post-meta">
                            <a class="post-date" href="{{ route('single-events', $event->id) }}"><i class="zmdi zmdi-calendar-check"></i>
                                {{ $event->date }}</a>

                        </div>

                        <td>{{ \Illuminate\Support\Str::limit(strip_tags($event->desc), $limit = 20, $end = '...') }}
                        </td>
                        </p>
                    </div>
                    <div class="blog-btn">
                        <a href="{{ route('single-events', $event->id) }}"><i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax" style="background-image: url(img/bg-img/14.jpg);">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">

                    <h4>{{ __('words.Services') }}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $index => $service)
            <div class="col-12 col-lg-4">
                <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <h6 class="ticket-plan">{{ $service->title }}</h6>

                    <div class="ticket-icon">
                        <img src="img/core-img/p1.png" alt="">
                    </div>
                    <img class="img-heightServices py-3 mb-2" height="100px" src="{{ asset('media/media/' . $service->media) }}" alt="media">

                    <div class="ticket-pricing-table-details">
                        {!! $service->desc !!}
                    </div>
                    <a href="{{ route('single-services', $service->id) }}" class="btn confer-btn w-100 ">{{ __('words.get service') }} <i class="zmdi zmdi-long-arrow-right"></i></a>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



<section class="contact-our-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">

                    <h4>{{__('words.contact us') }}</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-12 col-sm-3">
                <div class="contact-information mb-100">

                    <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                        <p>{{__('words.Address') }}:</p>
                        <h6>{{ \App\Models\Section::where('key','address')->first()->value }}</h6>

                    </div>

                    <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                        <p>{{__('words.phone') }}:</p>
                        <h6>{{ \App\Models\Section::where('key','phone')->first()->value }}</h6>
                    </div>

                    <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                        <p>{{__('words.email') }}:</p>

                        <h6> {{ \App\Models\Section::where('key','email')->first()->value }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8">

                <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                    <div class="contact_form">

                        <form action="{{ route('storeContact') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                            {{ csrf_field() }}

                            <div class="contact_input_area">
                                <div class="row">

                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="name" id="name" placeholder="{{ __('words.Name') }}">
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control mb-30" name="email" id="email" placeholder="{{ __('words.email') }}">
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="{{ __('words.subject') }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="phone" id="phone" placeholder="{{ __('words.phone') }}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="{{ __('words.Message') }}"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn confer-btn">{{ __('words.Send') }}<i class="zmdi zmdi-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection