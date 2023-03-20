@extends('layouts.website')
@section('title')
    {{ __('words.contact_us') }}
@stop
@section('content')

<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax"
    style="background-image: url({{asset('website/img/bg-img/37.jpg')}});">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-content">
            <h2 class="page-title">{{__("words.contact_us")}}</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">{{__("words.home")}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__("words.contact_us")}}</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="contact--us-area section-padding-100-0">
    <div class="container">
      <div class="row">

        <div class="col-12 col-lg-6">
          <div class="contact-us-thumb mb-100">
            <img src="{{asset('website/img/bg-img/44.jpg')}}" alt="">
          </div>
        </div>

        <div class="col-12 col-lg-6">
          @if (\Session::has('add'))
          <div class="alert alert-success" id="success-alert">
             <p>{{ \Session::get('add') }}</p>
          </div>
      @endif
          <div class="contact_from_area mb-100 clearfix">
        
            <div class="contact-heading">
              <h4>{{__("words.contact_us")}}</h4>
              <p>{{__('words.Tell us your details and well get right back to you') }}</p>
            </div>
            <div class="contact_form">
              
                <form action="{{ route('storeContact') }}" method="post" enctype="multipart/form-data"
                autocomplete="off">
                {{ csrf_field() }}
                
                <div class="contact_input_area">
                  <div class="row">

                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="name" id="name" placeholder="{{__('words.Name') }}"
                          >
                      </div>
                    </div>

                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control mb-30" name="email" id="email" placeholder="{{__('words.email') }}"
                          >
                      </div>
                    </div>

                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="subject" id="subject"
                          placeholder="{{__('words.subject') }}">
                      </div>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mb-30" name="phone" id="phone"
                          placeholder="{{__('words.phone')}}">
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6"
                          placeholder="{{__('words.Message')}}" ></textarea>
                      </div>
                    </div>

                    <div class="col-12">
                      <button type="submit" class="btn confer-btn">{{__('words.Send') }}<i
                          class="zmdi zmdi-long-arrow-right"></i></button>
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


  <div class="map-area">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8521.851236327686!2d-74.6724533513314!3d40.961125464236446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c371b215154515%3A0xb2dc3766c77b480b!2sHopatcong%2C+NJ%2C+USA!5e0!3m2!1sen!2sbd!4v1552471083596"
      allowfullscreen></iframe>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="contact--info-area bg-boxshadow">
          <div class="row">

            <div class="col-12 col-md-6 col-lg-4">
              <div class="single-contact--info text-center">

                <div class="contact--info-icon">
                  <img src="{{asset('website/img/core-img/icon-5.png')}}" alt="">
                </div>
                <h5>{{ \App\Models\Section::where('key','address')->first()->value }}</h5>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="single-contact--info text-center">

                <div class="contact--info-icon">
                  <img src="{{asset('website/img/core-img/icon-6.png')}}" alt="">
                </div>
                <h5>{{ \App\Models\Section::where('key','phone')->first()->value }}</h5>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="single-contact--info text-center">

                <div class="contact--info-icon">
                  <img src="{{asset('website/img/core-img/icon-7.png')}}" alt="">
                </div>
                <h5><a  class="__cf_email__"
                    data-cfemail="e5868a8b838097a58288848c89cb868a88">[{{ \App\Models\Section::where('key','email')->first()->value }}]</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection