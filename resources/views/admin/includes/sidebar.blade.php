
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav  class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.Dashboard')}}</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('section.index')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.sections')}}</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('technology.index')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.Technology')}}</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('question.index')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.All Questions')}}</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('service.index')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.All Services')}}</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('blog.index')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.Blogs')}}</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('team.index')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.Team')}}</span>
            </a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="{{route('app.index')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.Apps')}}</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('about.index')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.About')}}</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('information.index')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.Information')}}</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('pricing.index')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.Pricing')}}</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('messages.index')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">{{__('custom.Messages')}}</span>
            </a>
          </li>
{{-- 
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sections" aria-expanded="false" aria-controls="sections">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">{{ __('custom.sections') }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sections">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('section.index') }}">{{ __('custom.all sections') }}</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('section.create') }}">{{ __('custom.create section') }}</a></li>
              </ul>
            </div>
          </li> --}}

          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#techs" aria-expanded="false" aria-controls="techs">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">{{ __('custom.Technology') }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="techs">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('technology.index') }}">{{ __('custom.All Technology') }}</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('technology.create') }}">{{ __('custom.Add Technology') }}</a></li>
              </ul>
            </div>
          </li> --}}
{{-- 
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ques" aria-expanded="false" aria-controls="ques">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">{{ __('custom.Questions') }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ques">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('question.index') }}">{{ __('custom.All Questions') }}</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('question.create') }}">{{ __('custom.Add Questions') }}</a></li>
              </ul>
            </div>
          </li> --}}

          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#service" aria-expanded="false" aria-controls="service">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">{{ __('custom.Services') }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="service">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('service.index') }}">{{ __('custom.All Services') }}</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('service.create') }}">{{ __('custom.Add Service') }}</a></li>
              </ul>
            </div>
          </li> --}}

          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="blog">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">{{ __('custom.Blogs') }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('blog.index') }}">{{ __('custom.All Blogs') }}</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('blog.create') }}">{{ __('custom.Add Blog') }}</a></li>
              </ul>
            </div>
          </li> --}}
{{-- 
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#team" aria-expanded="false" aria-controls="team">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">{{ __('custom.Team') }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="team">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('team.index') }}">{{ __('custom.All members') }}</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('team.create') }}">{{ __('custom.Add Member') }}</a></li>
              </ul>
            </div>
          </li> --}}

          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#apps" aria-expanded="true" aria-controls="apps">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">{{ __('custom.Apps') }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="apps">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('app.index') }}">{{ __('custom.All Apps') }}</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('app.create') }}">{{ __('custom.Add App') }}</a></li>
              </ul>
            </div>
          </li> --}}

          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#about" aria-expanded="false" aria-controls="about">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">{{ __('custom.About') }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="about">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('about.index') }}">{{ __('custom.All Abouts') }}</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('about.create') }}">{{ __('custom.Add About') }}</a></li>
              </ul>
            </div>
          </li> --}}

          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#information" aria-expanded="false" aria-controls="information">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">{{ __('custom.Information') }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="information">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('information.index') }}">{{ __('custom.All Information') }}</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('information.create') }}">{{ __('custom.Add Information') }}</a></li>
              </ul>
            </div>
          </li> --}}

          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pricing" aria-expanded="false" aria-controls="pricing">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">{{ __('custom.Pricing') }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pricing">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('pricing.index') }}">{{ __('custom.All Pricings') }}</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('pricing.create') }}">{{ __('custom.Add Pricing') }}</a></li>
              </ul>
            </div>
          </li> --}}
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">