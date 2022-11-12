@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Edit Product Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Product`s Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- <img height="200px" width="200px" src="{!! $product->photo !!}"> --}}
                            <form method='POST' action='{{ route('post.edit.product') }}' enctype="multipart/form-data">
                                    @csrf
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Name') }}<span style="color:red">*</span></label>
                                <input type="text" name="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" value="{!! $product->name !!}" required autofocus>
                                </div>

                              

                                
                                

                                
                                <input type="hidden" name="uniqid" value="{!! $product->uniqid !!}">
                               


                                <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Description') }}</label>

                                    <textarea name="description" class="editor_text_area form-control form-control-alternative{{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="{{ __('Product Specification and Description') }}" value="{{ old('content') }}" rows="4">{!! $product->description !!}</textarea>

                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
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
});

</script>
        @include('layouts.footers.auth')
    </div>
@endsection






