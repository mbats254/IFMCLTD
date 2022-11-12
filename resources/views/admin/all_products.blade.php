@extends('layouts.app', ['title' => __('Category Management')])

@section('content')
@include('layouts.headers.cards')
    <style type="text/css">
        .grid-sizer,
        .grid-item { width: 50%; padding: 7px}

        @media screen and (max-width: 768px){
          .grid-sizer,.grid-item {
            width: 100%;
          }
        }
        @media screen and (max-width: 500px){
          .grid-sizer,.grid-item {
            width: 100%;
          }
    </style>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Products') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if(session()->get('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?= session()->get('message'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="container-fluid">
                        <div class="grid mb-2">
                            <div class="grid-sizer"></div>
                            @foreach($products as $product => $value)
                                <div class="grid-item">
                                    <div class="card" style="box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .05)">
                                        <div class="card-body d-flex flex-column align-items-start">
                                            <h2 class="mb-0">
                                                <a class="text-dark">{{ $value->name  }}</a>
                                            </h2>
                                          
                                            <div class="mb-3 text-muted" style="font-size: 12px"></div>
                                            <div class="btn-group mt-2">
                                                <a class="btn btn-outline-primary btn-sm" href="{{ route('edit.product',[$value->uniqid]) }}" style="float: right;">Edit &nbsp <i class="fa fa-pencil"></i></a>
                                                <a class="btn btn-outline-primary btn-sm" href="{{ route('delete.product',[$value->uniqid]) }}" style="float: right;">Delete &nbsp <i class="fa fa-bin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')

        <script type="text/javascript">
            $('.grid').masonry({
              // set itemSelector so .grid-sizer is not used in layout
              itemSelector: '.grid-item',
              // use element for option
              columnWidth: '.grid-sizer',
              percentPosition: true
            })
        </script>
    </div>


@endsection
