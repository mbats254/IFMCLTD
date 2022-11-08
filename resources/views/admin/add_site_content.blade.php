
@extends('layouts.app', ['title' => __('Site Content Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add New Site Content')])
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
                                <h3 class="mb-0">{{ __('Site Contents Management') }}</h3>
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
                        <form method="post" action="{{ route('post.site_content') }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Collect Site Contents information') }}</h6>

                            <div class="pl-lg-4">
                               <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="title">{{ __('company summary') }}</label>

                                    <input type="text" name="company_summary" id="company_summary" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('company_summary') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>


                               <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('vision') }}</label>

                                    <textarea type="text" name="vision" id="vision" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('email') }}" required autofocus></textarea>

                                    @if ($errors->has('vision'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('vision') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('mission') }}</label>

                                    <textarea type="text" name="mission" id="mission" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('email') }}" required autofocus></textarea>

                                    @if ($errors->has('mission'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mission') }}</strong>
                                        </span>
                                    @endif
                                </div>
                               <div class="form-group{{ $errors->has('innovation_summary') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('innovation_summary') }}</label>

                                    <textarea type="text" name="innovationn_summary" id="innovationn_summary" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('email') }}" required autofocus></textarea>

                                    @if ($errors->has('innovationn_summary'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('innovationn_summary') }}</strong>
                                        </span>
                                    @endif
                                </div>
                               <div class="form-group{{ $errors->has('our_goal') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('our goal') }}</label>

                                    <textarea type="text" name="our_goal" id="our_goal" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('our_goal') }}" required autofocus></textarea>

                                    @if ($errors->has('innovationn_summary'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('innovationn_summary') }}</strong>
                                        </span>
                                    @endif
                                </div>
                               <div class="form-group{{ $errors->has('training_program_summary') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('training_program_summary') }}</label>

                                    <textarea type="text" name="training_program_summary" id="training_program_summary" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('email') }}" required autofocus></textarea>

                                    @if ($errors->has('training_program_summary'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('training_program_summary') }}</strong>
                                        </span>
                                    @endif
                                </div>
                               <div class="form-group{{ $errors->has('snapshot_array') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('snapshot_array') }}</label>

                                    <textarea type="file" multiple name="snapshot_array" id="snapshot_array" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('') }}" value="{{ old('email') }}" required autofocus></textarea>

                                    @if ($errors->has('snapshot_array'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('snapshot_array') }}</strong>
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