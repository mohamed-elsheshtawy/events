@extends('admin.layouts.layout')
@section('title')
    {{ __('words.partners') }}
@stop
@section('body')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('words.partners') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{ __('words.partners') }}</li>
                </ol>


                <div class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('partners.store') }}" method="post" enctype="multipart/form-data"
                                    autocomplete="off">

                                    {{ csrf_field() }}
                                    {{-- 1 --}}

                                    <div class="row">
                                        <div class="col">
                                            <label for="inputName" class="control-label">{{ __('words.title_ar') }}</label>
                                            <input type="text" class="form-control" id="title_ar"
                                                name="title_ar"@error('title_ar') is-invalid @enderror>
                                            @error('title_ar')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="inputName" class="control-label">{{ __('words.title_en') }}</label>
                                            <input type="text" class="form-control" id="title_en"
                                                name="title_en"@error('title_en') is-invalid @enderror>
                                            @error('title_en')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- 2 --}}


                                    <div class="row">
                                        <div class="col">
                                            <label for="inputName" class="control-label">{{ __('words.link') }}</label>
                                            <input type="text" class="form-control" id="link"
                                                name="link"@error('link') is-invalid @enderror>
                                            @error('link')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div><br>

                                    <h5 class="card-title">{{ __('words.media') }}</h5>

                                    <div class="col-sm-12 col-md-12">
                                        <input type="file" name="media" class="dropify" data-height="70" />
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
