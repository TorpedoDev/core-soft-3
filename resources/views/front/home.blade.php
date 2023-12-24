@extends('front.layouts.app')
@section('content')
    @if (session('success'))
        <div class="text-center alert alert-success">{{ session('success') }}</div>
    @endif
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>{{__('custom.Welcome to')}} <span>{{__('custom.coresoft')}}</span></h2>
                    <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum
                        quaerat.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started">Get Started</a>
                        <a href="#"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>{{__('custom.Watch Video')}}</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('front/assets/img/hero-img.svg') }}" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">
                    @foreach ($sections as $section)
                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="{{ $section->logo }}"></i>
                                    {{-- {{$section->logo}} --}}
                                </div>
                                <h4 class="title"><a href="" class="stretched-link">
                                @if (app()->getLocale() == 'en')
                                {{ $section->title_en }}
@else
{{ $section->title_ar }}

                                @endif
                                </a>
                                </h4>
                            </div>
                        </div><!--End Icon Box -->
                    @endforeach
                    {{-- <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
            </div>
          </div><!--End Icon Box --> --}}

                    {{-- <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
            </div>
          </div><!--End Icon Box --> --}}

                    {{-- <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
            </div>
          </div><!--End Icon Box --> --}}

                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        @if (! is_null($about))
            <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>{{__('custom.About Us')}}</h2>
                        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat
                            sunt id nobis omnis tiledo stran delop</p>
                    </div>

                    <div class="row gy-4">
                        <div class="col-lg-6">
                            @if (app()->getLocale() == 'ar')
                                <h3>{{ $about->title_ar }}</h3>
                            @else
                                <h3>{{ $about->title_en }}</h3>
                            @endif
                            <img src="{{ asset('images/' . $about->image) }}" class="img-fluid rounded-4 mb-4" alt="">
                            <p>
                                @if (app()->getLocale() == 'ar')
                                    <p>{{ $about->imagedesc_ar }}</p>
                                @else
                                    <p>{{ $about->imagedesc_en }}</p>
                                @endif
                            </p>
                            {{-- <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p> --}}
                        </div>
                        <div class="col-lg-6">
                            <div class="content ps-0 ps-lg-5">
                                {{-- <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p> --}}
                                {{-- <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul> --}}
                                <p>
                                    @if (app()->getLocale() == 'ar')
                                        {{ $about->videodesc_ar }}
                                    @else
                                        {{ $about->videodesc_en }}
                                    @endif
                                </p>

                                <div class="position-relative mt-4">
                                    <img src="{{ asset('images/' . $about->video_image) }}" class="img-fluid rounded-4"
                                        alt="">
                                    <a href="{{ $about->video_link }}" class="glightbox play-btn"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End About Us Section -->
        @endif

        @if (count($technologies) > 0)
            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients">
                <div class="container" data-aos="zoom-out">

                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            @foreach ($technologies as $tech)
                                <div class="swiper-slide"><img src="{{ asset('images/' . $tech->logo) }}" class="img-fluid"
                                        alt=""></div>
                            @endforeach
                            {{-- <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-8.png') }}" class="img-fluid" alt=""></div> --}}
                        </div>
                    </div>

                </div>
            </section><!-- End Clients Section -->
        @endif
        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <img src="{{ asset('front/assets/img/stats-img.svg') }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
                        </div><!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                        </div><!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </div>
        </section><!-- End Stats Counter Section -->

        @if (! is_null($about))
        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="{{$about->video_link}}" class="glightbox play-btn"></a>
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </section><!-- End Call To Action Section -->
@endif
        @if (count($services) > 0)
            <!-- ======= Our Services Section ======= -->
            <section id="services" class="services sections-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>{{__('custom.Our Services')}}</h2>
                        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat
                            sunt id nobis omnis tiledo stran delop</p>
                    </div>

                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                        @foreach ($services as $service)
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item  position-relative">
                                    <div class="icon">
                                        <i class="{{$service->logo}}"></i>
                                    </div>
                                    <h3>
                                        @if (app()->getLocale() == 'en')
                                            {{ $service->name_en }}
                                        @else
                                            {{ $service->name_ar }}
                                        @endif
                                    </h3>
                                    <p>
                                        @if (app()->getLocale() == 'en')
                                            {{ substr($service->description_en, 0, 25) }}
                                        @else
                                            {{ substr($service->description_ar, 0, 25) }}
                                        @endif
                                    </p>
                                    <a href="#" class="readmore stretched-link">{{__('custom.Read more')}} <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div><!-- End Service Item -->
                        @endforeach







                    </div>

                </div>
            </section><!-- End Our Services Section -->
        @endif

        <!-- ======= Testimonials Section ======= -->
        {{-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('front/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('front/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('front/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('front/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

        @if (count($mobile) > 0 || count($web) > 0)
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio sections-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>{{__('custom.Portfolio')}}</h2>
                        <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et
                            autem uia reprehenderit sunt deleniti</p>
                    </div>

                    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                        data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                        <div>
                            <ul class="portfolio-flters">
                                <li data-filter="*" class="filter-active">{{__('custom.All')}}</li>
                                @if (count($mobile) > 0)
                                    <li data-filter=".filter-mobile">{{__('custom.Mobile')}}</li>
                                @endif

                                @if (count($web) > 0)
                                    <li data-filter=".filter-web">{{__('custom.Web')}}</li>
                                @endif

                                {{-- <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li> --}}
                            </ul><!-- End Portfolio Filters -->
                        </div>

                        <div class="row gy-4 portfolio-container">
                            @foreach ($mobile as $mob)
                                <div class="col-xl-4 col-md-6 portfolio-item filter-mobile">
                                    <div class="portfolio-wrap">
                                        <a href="{{ asset('images/' . $mob->image) }}" data-gallery="portfolio-gallery-app"
                                            class="glightbox"><img src="{{ asset('images/' . $mob->image) }}"
                                                class="img-fluid" alt=""></a>
                                        <div class="portfolio-info">
                                            <h4><a href="portfolio-details.html" title="More Details">
                                                    @if (app()->getLocale() == 'en')
                                                        {{ $mob->name_en }}
                                                    @else
                                                        {{ $mob->name_ar }}
                                                    @endif
                                                </a></h4>
                                            <p>
                                                @if (app()->getLocale() == 'en')
                                                    {{ $mob->description_en }}
                                                @else
                                                    {{ $mob->description_ar }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->
                            @endforeach

                            @foreach ($web as $w)
                                <div class="col-xl-4 col-md-6 portfolio-item filter-web">
                                    <div class="portfolio-wrap">
                                        <a href="{{ asset('images/' . $w->image) }}" data-gallery="portfolio-gallery-app"
                                            class="glightbox"><img src="{{ asset('images/' . $w->image) }}"
                                                class="img-fluid" alt=""></a>
                                        <div class="portfolio-info">
                                            <h4><a href="portfolio-details.html" title="More Details">
                                                    @if (app()->getLocale() == 'en')
                                                        {{ $w->name_en }}
                                                    @else
                                                        {{ $w->name_ar }}
                                                    @endif
                                                </a>
                                            </h4>
                                            <p>
                                                @if (app()->getLocale() == 'en')
                                                    {{ $w->description_en }}
                                                @else
                                                    {{ $w->description_ar }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->
                            @endforeach
                            {{-- <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="{{ asset('front/assets/img/portfolio/branding-1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('front/assets/img/portfolio/branding-1.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}

                            {{-- <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="{{ asset('front/assets/img/portfolio/books-1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('front/assets/img/portfolio/books-1.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}

                            {{-- <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{ asset('front/assets/img/portfolio/app-2.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('front/assets/img/portfolio/app-2.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}

                            {{-- <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{ asset('front/assets/img/portfolio/product-2.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('front/assets/img/portfolio/product-2.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}
                            {{-- 
            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="{{ asset('front/assets/img/portfolio/branding-2.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('front/assets/img/portfolio/branding-2.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}

                            {{-- <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="{{ asset('front/assets/img/portfolio/books-2.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('front/assets/img/portfolio/books-2.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}
                            {{-- 
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{ asset('front/assets/img/portfolio/app-3.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('front/assets/img/portfolio/app-3.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}

                            {{-- <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{ asset('front/assets/img/portfolio/product-3.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('front/assets/img/portfolio/product-3.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}

                            {{-- <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="{{ asset('front/assets/img/portfolio/branding-3.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('front/assets/img/portfolio/branding-3.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}

                            {{-- <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="{{ asset('front/assets/img/portfolio/books-3.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('front/assets/img/portfolio/books-3.jpg') }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}

                        </div><!-- End Portfolio Container -->

                    </div>

                </div>
            </section><!-- End Portfolio Section -->
        @endif



        @if (count($members) > 0)
            <!-- ======= Our Team Section ======= -->
            <section id="team" class="team">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>{{__('custom.Our Team')}}</h2>
                        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                            quis dolorem dolore earum</p>
                    </div>

                    <div class="row gy-4">
                        @foreach ($members as $member)
                            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                                <div class="member">
                                    <img src="{{ $member->image != null ? asset('images/' . $member->image) : asset('images/avatar.png') }}"
                                        class="img-fluid" alt="">
                                    <h4>
                                        @if (app()->getLocale() == 'en')
                                            {{ $member->name_en }}
                                        @else
                                            {{ $member->name_ar }}
                                        @endif
                                    </h4>
                                    <span>
                                        @if (app()->getLocale() == 'en')
                                            {{ $member->position_en }}
                                        @else
                                            {{ $member->position_ar }}
                                        @endif
                                    </span>
                                    <div class="social">
                                        @if (!is_null($member->facebook))
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                        @endif

                                        @if (!is_null($member->twitter))
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                        @endif

                                        @if (!is_null($member->instagram))
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                        @endif

                                        @if (!is_null($member->linkedin))
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div><!-- End Team Member -->
                        @endforeach

                        {{-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{ asset('front/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Marketing</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member --> --}}

                        {{-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{ asset('front/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
              <h4>William Anderson</h4>
              <span>Content</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member --> --}}
                        {{-- 
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="{{ asset('front/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member --> --}}

                    </div>

                </div>
            </section><!-- End Our Team Section -->
        @endif

        @if (count($pricings))
            <!-- ======= Pricing Section ======= -->
            <section id="pricing" class="pricing sections-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>{{__('custom.Pricing')}}</h2>
                        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat
                            sunt id nobis omnis tiledo stran delop</p>
                    </div>

                    <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">
                        @foreach ($pricings as $pricing)
                            <div class="col-lg-4">
                                <div class="pricing-item {{ $pricing->selected == 1 ? 'featured' : '' }}">
                                    <h3>
                                        @if (app()->getLocale() == 'en')
                                            {{ $pricing->name_en }}
                                        @else
                                            {{ $pricing->name_ar }}
                                        @endif
                                    </h3>
                                    <div class="icon">
                                        <i class="{{$pricing->logo}}"></i>
                                    </div>
                                    <h4><sup>$</sup>{{ $pricing->price }}<span> / month</span></h4>
                                    <ul>
                                        @if (app()->getLocale() == 'ar')
                                            {{ $pricing->description_ar }}
                                        @else
                                            {{ $pricing->description_en }}
                                        @endif
                                        {{-- <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li> --}}
                                    </ul>
                                    <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                                </div>
                            </div><!-- End Pricing Item -->
                        @endforeach

                    </div>

                </div>
            </section><!-- End Pricing Section -->
        @endif

        @if (count($questions) > 0)
            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq">
                <div class="container" data-aos="fade-up">

                    <div class="row gy-4">

                        <div class="col-lg-4">
                            <div class="content px-xl-5">
                                <h3>{{__('custom.Frequently Asked Questions')}}</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-8">

                            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up"
                                data-aos-delay="100">
                                <?php $i=0; ?>
                                @foreach ($questions as $index => $question)
                        <?php $i++ ?>
                                    <div class="accordion-item">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#faq-content-{{ $i }}">
                                                <span class="num">{{ $i }}.</span>
                                                @if (app()->getLocale() == 'en')
                                                    {{ $question->question_en }}
                                                @else
                                                    {{ $question->question_ar }}
                                                @endif
                                            </button>
                                        </h3>
                                        <div id="faq-content-{{ $i }}" class="accordion-collapse collapse"
                                            data-bs-parent="#faqlist">
                                            <div class="accordion-body">
                                                @if (app()->getLocale() == 'en')
                                                    {{ $question->answer_en }}
                                                @else
                                                    {{ $question->answer_ar }}
                                                @endif
                                            </div>
                                        </div>
                                    </div><!-- # Faq item-->
                                @endforeach
                                {{-- <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item--> --}}

                            </div>

                        </div>
                    </div>

                </div>
            </section><!-- End Frequently Asked Questions Section -->
        @endif


        @if (count($blogs) > 0)
            <!-- ======= Recent Blog Posts Section ======= -->
            <section id="recent-posts" class="recent-posts sections-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>{{__('custom.Recent Blog Posts')}}</h2>
                        <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel
                            architecto accusamus fugit aut qui distinctio</p>
                    </div>

                    <div class="row gy-4">
                        @foreach ($blogs as $blog)
                            <div class="col-xl-4 col-md-6">
                                <article>

                                    <div class="post-img">
                                        <img src="{{ asset('images/' . $blog->image) }}" alt="" class="img-fluid">
                                    </div>

                                    <p class="post-category">
                                        @if (app()->getLocale() == 'en')
                                            {{ $blog->title_en }}
                                        @else
                                            {{ $blog->title_ar }}
                                        @endif
                                    </p>

                                    <h2 class="title">
                                        <a href="{{route('blog.details' , $blog->id)}}">
                                            @if (app()->getLocale() == 'en')
                                                {{ substr($blog->content_en, 0, 80) }}
                                            @else
                                                {{ substr($blog->content_ar, 0, 80) }}
                                            @endif
                                        </a>
                                    </h2>

                                    {{-- <div class="d-flex align-items-center">
                                        <img src="{{ asset('front/assets/img/blog/blog-author.jpg') }}" alt=""
                                            class="img-fluid post-author-img flex-shrink-0">
                                        <div class="post-meta">
                                            <p class="post-author">Maria Doe</p>
                                            <p class="post-date">
                                                <time datetime="2022-01-01">Jan 1, 2022</time>
                                            </p>
                                        </div>
                                    </div> --}}

                                </article>
                            </div><!-- End post list item -->
                        @endforeach
                        {{-- <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('front/assets/img/blog/blog-2.jpg') }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('front/assets/img/blog/blog-author-2.jpg') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item --> --}}
                        {{-- 
          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('front/assets/img/blog/blog-3.jpg') }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('front/assets/img/blog/blog-author-3.jpg') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item --> --}}

                    </div><!-- End recent posts list -->

                </div>
            </section><!-- End Recent Blog Posts Section -->
        @endif

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>{{__('custom.Contact')}}</h2>
                    <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis
                        dolorem dolore earum</p>
                </div>

                <div class="row gx-lg-0 gy-4">
                    @if (!is_null($informations))
                        <div class="col-lg-4">
                            <div class="info-container d-flex flex-column align-items-center justify-content-center">
                                <div class="info-item d-flex">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h4>{{__('custom.Location')}}:</h4>
                                        <p>
                                            @if (app()->getLocale() == 'en')
                                                {{ $informations->location_en }}
                                            @else
                                                {{ $informations->location_ar }}
                                            @endif
                                        </p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h4>{{__('custom.Email')}}:</h4>
                                        <p>
                                            {{ $informations->email }}
                                        </p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-phone flex-shrink-0"></i>
                                    <div>
                                        <h4>{{__('custom.Call')}}:</h4>
                                        <p>
                                            {{ $informations->phone }}
                                        </p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-clock flex-shrink-0"></i>
                                    <div>
                                        <h4>{{__('custom.Open Hours')}}:</h4>
                                        <p>
                                            @if (app()->getLocale() == 'en')
                                                {{ $informations->open_en }}
                                            @else
                                                {{ $informations->open_ar }}
                                            @endif
                                        </p>
                                    </div>
                                </div><!-- End Info Item -->
                            </div>

                        </div>
                    @endif
                    <div class="col-lg-8">
                        {{-- role="form" class="php-email-form"  --}}
                        <form action="{{ route('messages.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" placeholder="{{__('custom.Your Name')}}">
                                    @error('name')
                                        <h6 class="text-danger">{{ $message }}</h6>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="email" placeholder="{{__('custom.Your Email')}}">
                                    @error('email')
                                        <h6 class="text-danger">{{ $message }}</h6>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" placeholder="{{__('custom.Subject')}}">
                                @error('subject')
                                    <h6 class="text-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="{{__('custom.Message')}}"></textarea>
                                @error('message')
                                    <h6 class="text-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                            {{-- <div class="my-3"> --}}
                            {{-- <div class="loading">Loading</div> --}}
                            {{-- <div class="error-message"></div> --}}
                            {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                            {{-- </div> --}}
                            <br>
                            <div class="text-center"><button class="btn text-white" style="background-color: #008374"
                                    type="submit">{{__('custom.Send Message')}}</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
