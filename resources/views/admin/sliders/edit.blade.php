@extends('admin.layouts.layout')
@section('body')
@section('title')
    {{ __('words.sliders') }}
@stop
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">{{ __('words.dashboard') }}</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">{{ __('words.dashboard') }}</li>
            </ol>



            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('sliders.update', $sliders->id) }} " method="post"
                                enctype="multipart/form-data" autocomplete="off">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                {{-- 1 --}}

                                <div class="row">
                                    <div class="col">
                                        <label for="inputName" class="control-label">{{ __('words.title_ar') }}</label>
                                        <input type="text" class="form-control" value="{{ $sliders->title_ar }}"
                                            id="title_ar" name="title_ar"@error('title_ar') is-invalid @enderror>
                                        @error('title_ar')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="inputName" class="control-label">{{ __('words.title_en') }}</label>
                                        <input type="text" class="form-control" id="title_en"
                                            value="{{ $sliders->title_en }}"
                                            name="title_en"@error('title_en') is-invalid @enderror>
                                        @error('title_en')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <label>{{ __('words.date') }} </label>
                                        <input class="form-control fc-datepicker" name="date"
                                            placeholder="YYYY-MM-DD" type="date">
                                    </div>


                                </div>

                                {{-- 2 --}}


                                <div class="row">
                                    <div class="col">
                                        <label for="exampleTextarea"> {{ __('words.desc_ar') }}</label>
                                        <textarea class="form-control" id="desc_ar" name="desc_ar" rows="3"@error('desc_ar') is-invalid @enderror> {{ $sliders->desc_ar }}</textarea>
                                        @error('desc_ar')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="exampleTextarea">{{ __('words.desc_en') }}</label>
                                        <textarea class="form-control" id="desc_en" name="desc_en" rows="3"@error('desc_en') is-invalid @enderror>{{ $sliders->desc_en }}</textarea>
                                        @error('desc_en')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div><br>

                                <h5 class="card-title">{{ __('words.media') }}</h5>

                                <div class="col-sm-12 col-md-12">
                                    <input type="file" name="media" class="dropify" data-height="70"
                                        @error('media') is-invalid @enderror />
                                    @error('media')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div><br>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">{{ __('words.save_d') }} </button>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
