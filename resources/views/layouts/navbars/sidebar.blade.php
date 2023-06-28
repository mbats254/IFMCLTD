<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="/">
            <img src="/img/me.png" class="navbar-brand-img" alt="...">
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

{{--               
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.product')}}">
                        <i class="fa fa-plus text-primary"></i> {{ __('Add Product') }}
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.service')}}">
                        <i class="fa fa-plus text-primary"></i> {{ __('Add Service') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.snap.shot')}}">
                        <i class="fa fa-plus text-primary"></i> {{ __('Add Snapshot') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('edit.contact.informtion')}}">
                        <i class="fa fa-pen text-primary"></i> {{ __('Edit Contact Information') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.faq')}}">
                        <i class="fa fa-plus text-primary"></i> {{ __('Add FAQ') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add.site.content')}}">
                        <i class="fa fa-pen text-primary"></i> {{ __('Edit Site Content') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('add.team.member') }}">
                        <i class="fa fa-plus text-primary"></i> {{ __('Add Team Member') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('add.testimonial') }}">
                        <i class="fa fa-plus text-primary"></i> {{ __('Add Testimonial') }}
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('all.products') }}">
                        <i class="fa fa-list text-primary"></i> {{ __('All Products') }}
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all.services') }}">
                        <i class="fa fa-list text-primary"></i> {{ __('All Services') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all.testimonials') }}">
                        <i class="fa fa-list text-primary"></i> {{ __('All Testimonials') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('send.newsletter') }}">
                        <i class="fa fa-microphone  text-primary"></i> {{ __('Send Newsltter') }}
                    </a>
                </li>
                
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('all.products')}}">
                        <i class="fa fa-shopping-cart text-primary"></i> {{ __('All Products') }}
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
