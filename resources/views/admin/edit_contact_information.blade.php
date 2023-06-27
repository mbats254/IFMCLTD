@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Edit Contact Information Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Contact Information`s Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- <img height="200px" width="200px" src="{!! $contact_information->photo !!}"> --}}
                            <form method='POST' action='{{ route('post.edit.contact.information') }}' enctype="multipart/form-data">
                                    @csrf
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Name') }}<span style="color:red">*</span></label>
                                <input type="text" name="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" value="{!! $contact_information->name !!}" required autofocus>
                                </div>

                              

                               
                                

                                
                                <input type="hidden" name="uniqid" value="{!! $contact_information->uniqid !!}">
                               


                                <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Phone Number') }}</label>

                                    <input name="phone_number" value="{!! $contact_information->phone_number !!}" class="editor_text_area form-control form-control-alternative{{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone Number') }}"  rows="4"/>

                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Email') }}</label>

                                    <input name="email" class="editor_text_area form-control form-control-alternative{{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone Number') }}" value="{!! $contact_information->email !!}" rows="4"/>

                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </div>
                               
                                <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Physical Location') }}</label>

                                    <input name="physical_location" class="editor_text_area form-control form-control-alternative{{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="{{ __('Physical Location') }}" value="{!! $contact_information->physical_location !!}" rows="4"/>

                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('P.O Box Address') }}</label>

                                    <input name="P_O_address" class="editor_text_area form-control form-control-alternative{{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="{{ __('P.O Box Address') }}" value="{!! $contact_information->P_O_address !!}" rows="4"/>

                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Link of Map') }}</label>

                                    <input name="map_link" class="editor_text_area form-control form-control-alternative{{ $errors->has('map_link') ? ' is-invalid' : '' }}" placeholder="{{ __('map_link') }}" value="{!! $contact_information->map_link !!}" rows="4"/>

                                    @if ($errors->has('map_link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </div>
                  

                            </div>
                         


                            
                                    <input type="submit" class="btn btn-success mt-4" value="Submit">

                                </form>
                             </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
$(document).ready(function(){
   $('#image').on("change", function(){
     $('.should_appear').fadeIn();
   });

   $('.descriptional_listing_btn').on('click',function(){
    $('.list_container').fadeIn();
   })
   $('.add_descriptional_listing_btn').on('click',function(){
    $('.descriptive_section').fadeIn();
   })
});

</script>
        @include('layouts.footers.auth')
    </div>
@endsection






