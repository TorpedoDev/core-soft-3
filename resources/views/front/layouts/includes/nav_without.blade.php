
<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>{{__('custom.coresoft')}}<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
              {{-- ***************************************************************88 --}}



<li class="dropdown"><a href="#"><span>{{ __('custom.'.LaravelLocalization::getCurrentLocaleName()) }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
  <ul>
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <li>
      
      <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
        <img src="{{ $localeCode == 'ar' ? asset('images/eg.png') : asset('images/us.png')}}" width="30px" height="30px" alt="">
        {{ __('custom.'.$properties['native']) }}
      </a>
    </li>
    @endforeach

  </ul>
</li>



{{-- **************************************************************8 --}}
          <li><a href="/home/#hero">{{__('custom.Home')}}</a></li>
          <li><a href="/home/#about">{{__('custom.About')}}</a></li>
          <li><a href="/home/#services">{{__('custom.Services')}}</a></li>
          <li><a href="/home/#portfolio">{{__('custom.Portfolio')}}</a></li>
          <li><a href="/home/#team">{{__('custom.Team')}}</a></li>
          <li><a href="/home/#recent-posts">{{__('custom.Blogs')}}</a></li>
      

          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a href="/home #contact">{{__('custom.Contact')}}</a></li>






          
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->