@extends('admin.layouts.layout')
@section('title')
    {{ __('words.sections') }}
@stop
@section('body')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('words.sections') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{ __('words.sections') }}</li>
                </ol>



                <div class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('section-update', $sections->id) }}" method="post"
                                    enctype="multipart/form-data" autocomplete="off">

                                    {{ csrf_field() }}
                                    {{-- 1 --}}


                                    <div class="col">
                                        <label for="inputName" class="control-label">{{ __('words.type') }}</label>
                                        <input type="text" class="form-control" id="key"
                                            value="{{ $sections->key }}" name="key"@error('key') is-invalid @enderror>
                                        @error('key')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="exampleTextarea"> {{ __('words.value') }}</label>
                                        <textarea class="form-control" id="value" name="value" rows="3"@error('value') is-invalid @enderror> {{ $sections->value }}</textarea>
                                        @error('value')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


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
