@extends('admin.layouts.layout')
@section('title')
    {{ __('words.sections') }}
@stop

@section('body');
    <div id="layoutSidenav_content">

        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s">{{ __('words.sections') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s">{{ __('words.sections') }}</li>
                </ol>
                <div class="row">

                    @if (\Session::has('edit'))
                        <div class="alert alert-success" id="alert-hide">
                            <p>{{ \Session::get('edit') }}</p>
                        </div>
                    @endif
                

                    <table class="table table-dark wow fadeInUp h-100" data-wow-duration="1s" data-wow-delay=".5s">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                            
                                <th scope="col">{{ __('words.type') }}</th>
                                <th scope="col">{{ __('words.value') }}</th>
                                <th scope="col">{{ __('words.edit') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sections as $index => $section)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $section->key}}</td>
                                    <td>{{ $section->value }}</td>
                                    <td>
                                        <a class="btn btn-warning"
                                            href="{{ route('sections-edit', $section->id) }}">{{ __('words.edit') }}
                                        </a>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $sections->links() }}

        </main>



    @endsection
