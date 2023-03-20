@extends('admin.layouts.layout')
@section('title')
    {{ __('words.settings') }}
@stop

@section('body');


    <div id="layoutSidenav_content">

        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s">{{ __('words.settings') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s">{{ __('words.settings') }}</li>
                </ol>
                <div class="row">

                    @if (\Session::has('edit'))
                        <div class="alert alert-success" id="alert-hide">
                            <p>{{ \Session::get('edit') }}</p>
                        </div>
                    @endif
                    @if (\Session::has('delete'))
                        <div class="alert alert-danger" id="alert-hide">
                            <p>{{ \Session::get('delete') }}</p>
                        </div>
                    @endif
                

                    <table class="table table-dark wow fadeInUp h-100" data-wow-duration="1s" data-wow-delay=".5s">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">{{ __('words.media') }}</th>
                                <th scope="col">{{ __('words.title_ar') }}</th>
                                <th scope="col">{{ __('words.title_en') }}</th>
                                <th scope="col">{{ __('words.type') }}</th>
                                <th scope="col">{{ __('words.edit') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($settings as $index => $setting)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>
                                        <img class="img-radius" src="{{ asset('media/media/' . $setting->media) }}"
                                            alt="media" width="100px" height="100px">
                                    </td>
                                    <td>{{ $setting->title_ar }}</td>
                                    <td>{{ $setting->title_en }}</td>
                                    <td>{{ $setting->type }}</td>
                                    <td>
                                        <a class="btn btn-warning"
                                            href="{{ route('settingEdit', $setting->id) }}">{{ __('words.edit') }}
                                        </a>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $settings->links() }}

        </main>



    @endsection
