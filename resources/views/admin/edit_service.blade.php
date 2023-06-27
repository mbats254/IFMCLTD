@extends('layouts.app', ['title' => __('Service Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Edit Service Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Service`s Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- <img height="200px" width="200px" src="{!! $service->photo !!}"> --}}
                            <form method='POST' action='{{ route('post.edit.service') }}' enctype="multipart/form-data">
                                    @csrf
                                     
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Name') }}<span style="color:red">*</span></label>
                                <input type="text" name="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" value="{!! $service->name !!}" required autofocus>
                                </div>

                              

                               
                                

                                
                                <input type="hidden" name="uniqid" value="{!! $service->uniqid !!}">
                               


                                <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Service Description') }}</label>

                                    <textarea name="service_description" class="editor_text_area form-control form-control-alternative{{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="{{ __('service Specification and Description') }}" value="{{ old('content') }}" rows="4">{!! $service->service_description !!}</textarea>

                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('How can Help') }}</label>

                                    <textarea type="text" name="how_we_can_help" id="how_we_can_help" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value=""  autofocus>{!! $service->how_we_can_help !!}</textarea>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('Icon') }}</label>

                                    <input type="text" name="icon" id="icon" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}"   autofocus value={!! $service->icon !!}/>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <img src="{!! $service->page_photo !!}" alt="no photo at the moment"/>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} description">
                                     <label class="form-control-label" for="email">{{ __('Page Photo') }}</label>
 
                                     <input type="file" name="photo" id="photo" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('email') }}"  autofocus/>
 
                                     @if ($errors->has('name'))
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                     @endif
                                 </div>
                                <a class="btn btn-outline-primary btn-sm add_descriptional_listing_btn"  style="float: right;">Add Descriptional Lising Item &nbsp <i class="fa fa-pencil"></i></a>
                                <a class="btn btn-outline-primary btn-sm"  href="{!! route('all.descriptive_listing',[$service->uniqid]) !!}" style="float: right;">Edit Exisiting Descriptional List Item &nbsp <i class="fa fa-pencil"></i></a>
                                <div style="display:none" class="descriptive_section">
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('Descriptional Listing(Title)') }}</label>

                                    <input type="text" name="descriptional_listing" id="descriptional_listing" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('email') }}"  autofocus/>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                               <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} description">
                                    <label class="form-control-label" for="email">{{ __('List Item Description') }}</label>

                                    <textarea type="text" name="list_item_description" id="list_item_description" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('email') }}"  autofocus></textarea>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
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






