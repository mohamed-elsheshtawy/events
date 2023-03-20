@extends('admin.layouts.layout')
@section('body')
@section('title')
    {{ __('words.media') }}
@stop
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">{{ __('words.media') }}</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">{{ __('words.media') }}</li>
            </ol>



            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('mediaExhibitions.update', $medias->id) }} " method="post"
                                enctype="multipart/form-data" autocomplete="off">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                {{-- 1 --}}



                                <div class="col">
                                    <label for="exampleTextarea">{{ __('words.exhibitions') }}</label>
                                    <select name="exhibition_id" id="exhibition_id" class="form-control" required>
                                        <option value="" > {{ __('words.Select Gallery') }}</option>
                                        @foreach ($exhibitions as $index=> $exhibition)
                                        <option {{ $exhibition->id == $medias->exhibition_id ? 'selected' : '' }} value="{{ $exhibition->id }}">{{ $exhibition->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

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
