<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="/home">
            <img src="/site/images/TOM.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        {{-- <span class="avatar avatar-sm rounded-circle">
                        {{-- <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg"> --}}
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    {{-- <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a> --}}
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="#">
                            <img src="/site/images/TOM.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            @if(Auth::user()->password !== null)
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fa fa-home text-primary"></i> {{ __('Home') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.product')}}">
                        <i class="fa fa-gavel text-primary"></i> {{ __('Add Product') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.service')}}">
                        <i class="fa fa-gavel text-primary"></i> {{ __('Add Service') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.site.content')}}">
                        <i class="fa fa-gavel text-primary"></i> {{ __('Add Site Content') }}
                    </a>
                </li>

                {{-- 

                <li class="nav-item">
                        <a class="nav-link" href="{{ route('add.category') }}">
                            <i class="fa fa-list text-primary"></i> {{ __('Add Category') }}
                        </a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('add.menu.item') }}">
                            <i class="fa fa-clipboard text-primary"></i> {{ __('Add Menu Item') }}
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('all.products')}}">
                        <i class="fa fa-shopping-cart text-primary"></i> {{ __('All Products') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all.categories')}}">
                        <i class="fa fa-ellipsis-v text-primary"></i> {{ __('All Categories') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all.slider.photos')}}">
                        <i class="fa fa-sliders-h text-primary"></i> {{ __('All Slider Photos') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about.us.details')}}">
                        <i class="fa fa-book text-primary"></i> {{ __('Edit About Us') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.locations')}}">
                        <i class="fa fa-map-marker text-primary"></i> {{ __('Add Delivery Locations') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('team.input')}}">
                        <i class="fa fa-user text-primary"></i> {{ __('Team Input') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('newsletter.input')}}">
                        <i class="fa fa-envelope text-primary"></i> {{ __('Newsletter Input') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.menu.download')}}">
                        <i class="fa fa-file text-primary"></i> {{ __('Menu File Upload') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('all.reservations')}}">
                        <i class="fa fa-book text-primary"></i> {{ __('All Reservations') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.slider')}}">
                        <i class="fa fa-sliders-h text-primary"></i> {{ __('Add Slider Photo') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('all.customer.feedback')}}">
                        <i class="fa fa-volume-up text-primary"></i> {{ __('All Customer Feedback') }}
                    </a>
                </li> --}}

            </ul>
               @endif
                    </div>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="{!! route('all_projects.show') !!}">
                        <i class="fa fa-users text-primary"></i> Grant Applications
                    </a>
                </li> --}}

                {{-- <li class="nav-item">
                    <a class="nav-link" href="/submission">
                        <i class="fa fa-users text-primary"></i> Submit Application
                    </a>
                </li> --}}

            </ul>
        </div>
    </div>
    <div class="modal" id="notification_modal" role="dialog" style="z-index:9999;">
            <div class="w3-modal-dialog">
              <!-- Modal content-->

              <div class="modal-content modal_modify" style="background-color:rgba(255,255,255,0.8);">
                <div class="modal-header w3-border-bottom">


                    <h4 id="response_id" ></h4>

                </div>
                </div>
              </div>
          </div>
</nav>
