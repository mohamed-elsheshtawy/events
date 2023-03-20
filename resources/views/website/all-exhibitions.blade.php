@extends('layouts.website')
@section('title')
{{ __('words.exhibitions') }}
@stop

@section('content')
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url({{ asset('website/img/bg-img/37.jpg') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">{{ __('words.exhibitions') }}</h2>

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">{{ __('words.home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('words.exhibitions') }}</li>
                    </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- partial -->

<div class="our-blog-area section-padding-100">
    <div class="container">


        <div class="row" >

            @foreach ($exhibitions as $index=> $exhibition)
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="300ms">

                    <div class="single-blog-thumb">
                        <img class="img-height" src="{{ asset('media/media/'.$exhibition->media )}}" alt="media">
                    </div>
                    <div class="single-blog-text text-center">
                        <a class="blog-title" href="{{route('single-exhibitions',$exhibition->id) }}">{{ $exhibition->name}}</a>

                        <div class="post-meta">
                            <a class="post-date" href="{{route('single-exhibitions',$exhibition->id) }}"><i class="zmdi zmdi-calendar-check"></i>
                                {{$exhibition->created_at}}</a>

                        </div>
                        <p>
                            <td>{{ \Illuminate\Support\Str::limit(strip_tags($exhibition ->desc), $limit = 20, $end = '...')}}</td>
                        </p>
                    </div>
                    <div class="blog-btn">
                        <a href="{{route('single-exhibitions',$exhibition->id) }}"><i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>
@endsection