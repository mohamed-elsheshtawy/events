@extends('admin.layouts.layout')
@section('title')
    {{ __('words.profile') }}
@stop
@section('body')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('words.profile') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{ __('words.profile') }}</li>
                </ol>



                <div class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('profile-update', $users->id) }}" method="post"
                                    enctype="multipart/form-data" autocomplete="off">

                                    {{ csrf_field() }}
                                    {{-- 1 --}}


                                    <div class="col">
                                        <label for="inputName" class="control-label">{{ __('words.name') }}</label>
                                        <input type="text" class="form-control" id="name"
                                            value="{{ $users->name }}" name="name" @error('name') is-invalid @enderror>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="inputName" class="control-label">{{ __('words.email') }}</label>
                                        <input type="email" class="form-control" id="email"
                                            value="{{ $users->email }}" name="email" @error('email') is-invalid @enderror>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="inputName" class="control-label">{{ __('words.password') }}</label>
                                        <input type="password" class="form-control" id="password"
                                            value="" name="password" @error('password') is-invalid @enderror>
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                            </div><br>
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

    </div>
    </main>
@endsection
