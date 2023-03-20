@extends('admin.layouts.layout')
@section('title')
{{ __('words.settings') }}
@stop
@section('body')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('words.settings') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{ __('words.settings') }}</li>
                </ol>



                <div class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('settingUpdate', $settings->id) }}" method="post"
                                    enctype="multipart/form-data" autocomplete="off">

                                    {{ csrf_field() }}
                                    {{-- 1 --}}

                                    <div class="row">
                                        <div class="col">
                                            <label for="inputName" class="control-label">{{ __('words.title_ar') }}</label>
                                            <input type="text" class="form-control" value="{{ $settings->title_ar }}"
                                                id="title_ar" name="title_ar"@error('title_ar') is-invalid @enderror>
                                            @error('title_ar')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="inputName" class="control-label">{{ __('words.title_en') }}</label>
                                            <input type="text" class="form-control" id="title_en"
                                                value="{{ $settings->title_en }}"
                                                name="title_en"@error('title_en') is-invalid @enderror>
                                            @error('title_en')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>




                                    </div>

                                    {{-- 2 --}}


                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleTextarea"> {{ __('words.desc_ar') }}</label>
                                            <input id="desc_ar" type="hidden" name="desc_ar"  value="{{ $settings->desc_ar }}" @error('desc_ar') is-invalid @enderror>
                                            <trix-editor input="desc_ar"></trix-editor>
                                        
                                            @error('desc_ar')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="exampleTextarea">{{ __('words.desc_en') }}</label>
                                            <input id="desc_en" type="hidden" name="desc_en" value="{{ $settings->desc_en }}" @error('desc_en') is-invalid @enderror>
                                            <trix-editor input="desc_en"></trix-editor>
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
