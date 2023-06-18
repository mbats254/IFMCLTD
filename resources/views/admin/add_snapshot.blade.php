
@extends('layouts.app', ['title' => __('Snapshot Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add New Snapshot')])
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
                                <h3 class="mb-0">{{ __('Snapshots Management') }}</h3>
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
                        <form method="post" action="{{ route('post.snapshot') }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Collect Snapshots information') }}</h6>

                            <div class="pl-lg-4">
                               <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                
                                    <label class="form-control-label" for="title">{{ __('Snapshot`s title') }}</label>

                                    <input type="text" name="title" id="title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                               <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                             
                                    <label class="form-control-label" for="title">{{ __('Snapshot`s accompanying Text') }}</label>

                                    <input type="text" name="accompanying_text" id="accompanying_text" class="form-control form-control-alternative{{ $errors->has('accompanying_text') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('accompanying_text') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('accompanying_text') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('bio') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="bio">{{ __('Backdrop Image') }}</label>

                                    <input type="file" name="backdropImage" id="backdropImage" class="form-control form-control-alternative{{ $errors->has('backdropImage') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('backdropImage') }}" required autofocus/>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('backdropImage') }}</strong>
                                        </span>
                                    @endif
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
