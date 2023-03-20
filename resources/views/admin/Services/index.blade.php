@extends('admin.layouts.layout')
@section('title')
    {{ __('words.Services') }}
@stop

@section('body');


    <div id="layoutSidenav_content">

        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s">{{ __('words.Services') }}
                </h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s">
                        {{ __('words.Services') }}</li>
                </ol>
                <div class="row">
                    @if (\Session::has('add'))
                        <div class="alert alert-success" id="alert-hide">
                            <p>{{ \Session::get('add') }}</p>
                        </div>
                    @endif
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
                    <div class="add_btn">
                        <a href="services/create" class="btn btn-success px-5 wow fadeInLeft h-100" data-wow-duration="1s"
                            data-wow-delay=".5s"> {{ __('words.add') }}</a>

                    </div>


                    <table class="table table-dark wow fadeInUp h-100" data-wow-duration="1s" data-wow-delay=".5s">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">{{ __('words.media') }}</th>
                                <th scope="col">{{ __('words.title_ar') }}</th>
                                <th scope="col">{{ __('words.title_en') }}</th>
                                <th scope="col">{{ __('words.date') }}</th>
                                <th scope="col">{{ __('words.settings') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $index => $service)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>
                                        <img class="img-radius" src="{{ asset('media/media/' . $service->media) }}"
                                            alt="media" width="100px" height="100px">
                                    </td>
                                    <td>{{ $service->title_ar }}</td>
                                    <td>{{ $service->title_en }}</td>
                                    <td>{{ $service->created_at }}</td>
                                    <td>
                                        <a class="btn btn-warning"
                                            href=" {{ route('services.edit', $service->id) }}">{{ __('words.edit') }}
                                        </a>


                                        <a class="btn btn-danger" href="#" data-service_id="{{ $service->id }}"
                                            data-bs-toggle="modal" data-bs-target="#delete_service">
                                            {{ __('words.delete') }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $services->links() }}

        </main>
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="delete_service" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <form action="{{ route('services.destroy', 'test') }}" method="post">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}
                    </div>
                    <div class="modal-body">
                        {{ __('words.are sure of the deleting process ?') }}
                        <input type="hidden" name="service_id" id="service_id" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            {{ __('words.Close') }}</button>
                        <button type="submit" class="btn btn-danger"> {{ __('words.save') }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>







    @endsection
