
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>


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
          </li>

          <li class="nav-item">
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
          </li>

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
          </li>

          <li class="nav-item">
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
          </li>

          <li class="nav-item">
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
          </li>

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
          </li>

          <li class="nav-item">
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
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="contact">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">{{ __('custom.Contacts') }}</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="contact">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('contact.index') }}">{{ __('custom.All Contacts') }}</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('contact.create') }}">{{ __('custom.Add Contact') }}</a></li>
              </ul>
            </div>
          </li>



          <li class="nav-item">
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
          </li>

          <li class="nav-item">
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
          </li>

          

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">