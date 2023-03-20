@extends('layouts.website')
@section('title')
{{ __('words.exhibition details') }}
@stop

@section('content')
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/37.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">{{__('words.exhibition details')  }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">{{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('words.Services') }}</li>
                            <li class="breadcrumb-item active mx-2 " aria-current="page">{{__('words.exhibition details')  }}</li>
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

            <div class="col-12 col-lg-8 col-xl-9  fadeIn" data-wow-delay="1s">
                <div class="pr-lg-4 mb-100">

                    <div class="post-details-content">

                        <div class="post-blog-thumbnail mb-30fadeInDown h-100" data-wow-duration="1s" data-wow-delay="1s">
                            <img src="{{ asset('media/media/'.$exhibition->media )}}" width="100%" height="100%" alt="media" style="max-height:300px">
                        </div>
            

                    <h4 class="post-title">{{ $exhibition->name }}</h4>

                    <div class="post-meta">
                        <a class="post-date" href="#"><i class="zmdi zmdi-calendar-check p-2"></i>{{ $exhibition->created_at }}</a>
                    </div>

                    <div class="wow fadeInDown h-100" data-wow-duration="1s" data-wow-delay="1s">{!! $exhibition->desc !!}</div>

                    </div>
                </div>
            </div>

        </div>




        <div class="demo">
            <h4 class="post-title text-center" style="margin-bottom: 20px;">{{__('words.All Media') }}</h4>
            <ul id="lightSlider">
                @foreach( $exhibition->all_media as $media)
                <li data-thumb="{{ asset('media/media/'.$media->media )}}">
                    <img class="img-gllery" src="{{ asset('media/media/'.$media->media )}}" />
                </li>
                @endforeach
            </ul>
        </div>


    </div>

</section>
@endsection