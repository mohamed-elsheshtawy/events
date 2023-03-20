@extends('admin.layouts.layout')
@section('title')
{{ __('words.contact us') }}
@stop
@section('body')



    <div id="layoutSidenav_content">

        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4  wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s">{{ __('words.contact us') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active  wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s">{{ __('words.contact us') }}</li>
                </ol>
                <div class="row">
                
                    @if (\Session::has('delete'))
                        <div class="alert alert-danger" id="alert-hide">
                            <p>{{ \Session::get('delete') }}</p>
                        </div>
                    @endif



                    <table class="table table-dark  wow fadeInUp h-100" data-wow-duration="1s" data-wow-delay=".5s">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                              
                                <th scope="col">{{ __('words.Name') }}</th>
                             
                                <th scope="col">{{ __('words.email') }}</th>
                                
                                <th scope="col">{{ __('words.subject') }}</th>
                                <th scope="col">{{ __('words.phone') }}</th>
                                <th scope="col">{{ __('words.date') }}</th>
                                <th scope="col">{{ __('words.show message') }}</th>
                                <th scope="col">{{ __('words.settings') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contact_us as $index => $contact)
                                <tr>
                                    <td>{{ ++$index }}</td>

                                    <td>{{ $contact->name}}</td>
                                    
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                   
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->created_at }}</td>

                                    <td>


                                        <a class="btn btn-success" href="#" data-contact_id="modal{{ $contact->id }}"
                                            data-bs-toggle="modal" data-bs-target="#modal{{ $contact->id }}">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>

                                        {{-- show model --}}

                                        <div class="modal fade" id="modal{{ $contact->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 style="color: black;"> {{ $contact->name}} </h2>


                                                    </div>
                                                    <div class="modal-body">
                                                        <p style="  color: black; height: 166px;">
                                                            {{ $contact->message }}
                                                      </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal"> {{ __('words.Close') }}</button>

                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                    </td>
                                    <td>


                                        <a class="btn btn-danger" href="#" data-contact_id="{{ $contact->id }}"
                                            data-bs-toggle="modal" data-bs-target="#delete_contact">
                                            {{ __('words.delete') }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $contact_us->links() }}
        </main>







        <!-- Modal detele-->
        <div class="modal fade" id="delete_contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <form action="{{ route('contact-us_delete') }}" method="post">

                            @csrf
                                {{method_field('delete')}}
                    </div>
                    <div class="modal-body">
                        {{ __('words.are sure of the deleting process ?') }}
                        <input type="hidden" name="contact_id" id="contact_id" value="">
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
