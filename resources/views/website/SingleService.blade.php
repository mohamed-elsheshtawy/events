@extends('layouts.website')
@section('title')
{{ __('words.Service details') }}
@stop

@section('content')
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/37.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">{{__('words.Service details')  }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">{{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('words.Services') }}</li>
                            <li class="breadcrumb-item active mx-2 " aria-current="page">{{__('words.Service details')  }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="confer-blog-details-area section-padding-100-0">
    <div class="container">

        <div class="row justify-content-center align-ar">
            @foreach ($Services as $index=> $Service)
            <div class="col-12 col-lg-8 col-xl-9 wow fadeIn" data-wow-delay="1s">
                <div class="pr-lg-4 mb-100">

                    <div class="post-details-content">

                        <div class="post-blog-thumbnail mb-30 wow fadeInDown h-100" data-wow-duration="1s" data-wow-delay="1s">
                            <img src="{{ asset('media/media/'.$Service->media )}}" width="100%" height="100%" alt="media" style="max-height:300px">
                        </div>

                        <h4 class="post-title">{{ $Service->title }}</h4>

                        <div class="post-meta">
                            <p><i class="zmdi zmdi-calendar-check"></i> {{ $Service->created_at }}</p>
                        </div>

                        <div class="wow fadeInDown h-100" data-wow-duration="1s" data-wow-delay="1s">{!! $Service->desc !!}</div>

                        <blockquote class="confer-blockquote">
                            <h5>{!! $Service->content !!}</h5>
                        </blockquote>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
@endsection