@extends('admin.layouts.layout')
@section('title')
{{ __('words.home') }}
@stop

@section('body');
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4  wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s">{{__('words.dashboard') }}</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active  wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s"> {{__('words.dashboard') }}</li>
            </ol>
            @if (\Session::has('edit'))
            <div class="alert alert-success" id="alert-hide">
                <p>{{ \Session::get('edit') }}</p>
            </div>
        @endif
            <div class="row">
                <div class="col-xl-3 col-md-6  wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s">
                   
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body"> <h2>{{__('words.events') }}:</h2>{{ \App\Models\Event::count() }}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('events.index') }}">{{__('words.View Details') }}</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6  wow fadeInLeft h-100" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="card bg-warning text-white mb-4">
                       
                        <div class="card-body"> <h2>{{__('words.sliders') }}:</h2>{{ \App\Models\Slider::count() }}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('sliders.index') }}">{{__('words.View Details') }}</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6  wow fadeInRight h-100" data-wow-duration="1s" data-wow-delay=".5s">
                    
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body"><h2>{{__('words.Contact') }}:</h2>{{ \App\Models\Contact::count() }}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('all_contact-us') }}">{{__('words.View Details') }}</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInRight h-100" data-wow-duration="1s" data-wow-delay=".5s">
                    
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body"><h2>{{__('words.partners') }}:</h2>{{ \App\Models\Partner::count() }}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('partners.index') }}">{{__('words.View Details') }}</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <table class="table table-dark wow fadeInUp h-100" data-wow-duration="1s" data-wow-delay=".5s">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                          
                            <th scope="col">{{ __('words.Name') }}</th>
                         
                            <th scope="col">{{ __('words.email') }}</th>
                            
                            <th scope="col">{{ __('words.subject') }}</th>
                            <th scope="col">{{ __('words.phone') }}</th>
                            <th scope="col">{{ __('words.date') }}</th>
                            <th scope="col">{{ __('words.show message') }}</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( \App\Models\Contact::orderBy('id', 'DESC')->limit(10)->get(); as $index => $contact)
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection