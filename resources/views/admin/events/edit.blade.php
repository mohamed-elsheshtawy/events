@extends('admin.layouts.layout')
@section('body')
@section('title')
    {{ __('words.events') }}
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

                                <form action="{{ route('events.update', $events->id) }} " method="post"
                                    enctype="multipart/form-data" autocomplete="off">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    {{-- 1 --}}

                                    <div class="row">
                                        <div class="col">
                                            <label for="inputName" class="control-label">{{ __('words.name_ar') }}</label>
                                            <input type="text" class="form-control" value="{{ $events->name_ar }}"
                                                id="name_ar" name="name_ar"@error('name_ar') is-invalid @enderror>
                                            @error('name_ar')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="inputName" class="control-label">{{ __('words.name_en') }}</label>
                                            <input type="text" class="form-control" id="name_en"
                                                value="{{ $events->name_en }}"
                                                name="name_en"@error('name_en') is-invalid @enderror>
                                            @error('name_en')
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
                                            <input id="desc_ar" type="hidden" name="desc_ar"  value="{{ $events->desc_ar }}" @error('desc_ar') is-invalid @enderror>
                                            <trix-editor input="desc_ar"></trix-editor>
                                        
                                            @error('desc_ar')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="exampleTextarea">{{ __('words.desc_en') }}</label>
                                            <input id="desc_en" type="hidden" name="desc_en" value="{{ $events->desc_en }}" @error('desc_en') is-invalid @enderror>
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
