
@extends('layouts.app', ['title' => __('Product Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add New Product')])
    <style type="text/css">
        .ck-editor__editable_inline {
            min-height: 500px;
            }
    </style>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Products Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                {{-- @if($refer !== null) --}}
                                <a href="" class="btn btn-sm btn-primary">{{ __('Back') }}</a>
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="notification is-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <form method="post" action="{{ route('post.product') }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Collect Products information') }}</h6>

                            <div class="pl-lg-4">
                               <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="title">{{ __('Product`s Name') }}</label>

                                    <input type="text" name="name" id="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>


                               <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('Product`s Description') }}</label>

                                    <textarea type="text" name="email" id="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('email') }}" required autofocus></textarea>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                               


                                    <div class="form-group{{ $errors->has('grant_name') ? ' has-danger' : '' }} ">
                                        <label class="form-control-label" for="user_type">{{ __('Product Type') }}</label>
                                            <select id="role" name="role" class="form-control form-control-alternative{{ $errors->has('grant_id') ? ' is-invalid' : '' }}" placeholder="Select Country" required="required">
                                            <option value="Accounting">Accounting</option>
                                            <option value="Auditing">Auditing</option>
                                            <option value="Tax Planning">Tax Planning</option>
                                            <option value="Business Advisory Services">Business Advisory Services</option>
                                           

                                        </select>
                                    </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $('.schedule-type').change(function(){
                let val = $(this).val();
                if (val == 'Schedule') {
                    $('.scheduler').show();
                } else {
                    $('.scheduler').hide();
                }
            })
        </script>

        @include('layouts.footers.auth')
    </div>
@endsection
