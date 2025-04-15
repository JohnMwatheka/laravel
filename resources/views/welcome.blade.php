<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pace</title>

        <meta name="description" content="PACE Events" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Primary Meta Tags -->
        <meta name="title" content="PACE" />
        <meta name="description" content="Welcome to Pacesetter Entertainment, Nairobi's premier party and events company. Since 2023, we have been crafting unforgettable experiences that educate, motivate, and entertain. Specializing in event management and organization across Kenya, we bring innovation and excellence to every occasion. From corporate events to private celebrations, trust us to make your events remarkable." />
    
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://pace-gules.vercel.app/" />
        <meta property="og:title" content="PACE" />
        <meta property="og:description" content="Welcome to Pacesetter Entertainment, Nairobi's premier party and events company. Since 2023, we have been crafting unforgettable experiences that educate, motivate, and entertain. Specializing in event management and organization across Kenya, we bring innovation and excellence to every occasion. From corporate events to private celebrations, trust us to make your events remarkable." />
        <meta property="og:image" content="https://pace-gules.vercel.app/assets/img/logo/logo.png" />
    
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://pace-gules.vercel.app/" />
        <meta property="twitter:title" content="PACE" />
        <meta property="twitter:description" content="Welcome to Pacesetter Entertainment, Nairobi's premier party and events company. Since 2023, we have been crafting unforgettable experiences that educate, motivate, and entertain. Specializing in event management and organization across Kenya, we bring innovation and excellence to every occasion. From corporate events to private celebrations, trust us to make your events remarkable." />
        <meta property="twitter:image" content="https://pace-gules.vercel.app/assets/img/logo/logo.png" />
    
    
        <link
          rel="shortcut icon"
          type="image/x-icon"
          href="assets/img/logo/logo.png"
        />
        <!-- Place favicon.ico in the root directory -->
    
        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon_mycollection.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

        <!-- Styles / Scripts -->
            <style>
                 .td-banner-area {
                        position: relative;
                        background: url("assets/img/logo/logo.png") center center / cover no-repeat;
                    }
                    .td-banner-overlay {
                        content: "";
                        position: absolute;
                        inset: 0;
                        background: rgba(0, 0, 0, 0.5); /* Adjust opacity for darkness */
                    }
                    .td-banner-area .container {
                        position: relative;
                        z-index: 1;
                    }
                    .not{
                        cursor: no-drop;
                    }
                    .image-wrapper {
                  position: relative;
                  overflow: hidden;
                  width: 100%;
                  height: 100%;
                  border-top-right-radius: 30px;   /* adjust as needed */
                  border-bottom-left-radius: 30px; /* adjust as needed */
                  }

                  .image-wrapper img {
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  border-top-right-radius: 30px;
                  border-bottom-left-radius: 30px;
                  }

            </style>
        
    </head>
    <body>
        <!-- Preloader Start -->
        <div class="preloader">
          <div class="loader"></div>
        </div>
        <!-- Preloader End -->
    
        <!-- Scroll-top -->
        <button class="scroll__top scroll-to-target" data-target="html">
          <i class="fa-sharp fa-regular fa-arrow-up"></i>
        </button>
        <!-- Scroll-top-end-->
    
        <!-- header-search -->
        <div class="search__popup">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="search__wrapper">
                  <div class="search__close">
                    <button type="button" class="search-close-btn">
                      <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M17 1L1 17"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M1 1L17 17"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="search__form">
                    <form action="#">
                      <div class="search__input">
                        <input
                          class="search-input-field"
                          type="text"
                          placeholder="Type keywords here"
                        />
                        <span class="search-focus-border"></span>
                        <button type="submit">
                          <svg
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                              stroke="currentColor"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                            <path
                              d="M19.0002 19.0002L17.2002 17.2002"
                              stroke="currentColor"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                          </svg>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="search-popup-overlay"></div>
        <!-- header-search-end -->
    
        <!-- header-area -->
        <header class="td-header-height mb-3">
          <div
            id="header-sticky"
            class="td-header__area header-mobile-spacing td-transparent"
          >
            <div class="container">
              <div class="row align-items-center">
                <div class="col-xl-12 col-6">
                  <div class="tdmenu__wrap d-flex align-items-center justify-content-between">
                    <div class="logo">
                      <a class="logo-1" href="#"
                        ><img src="assets/img/logo/logo.png" alt="Logo" width="100" height="100"
                      /></a>
                    </div>
                    <nav class="tdmenu__nav tdmenu-2 mr-90 d-none d-xl-flex">
                      <div class="tdmenu__navbar-wrap tdmenu__main-menu">
                        <ul class="navigation">
                          <li class="active menu-item-has-children">
                            <a href="#">Home</a>
                            <!-- <ul class="sub-menu">
                              <li><a href="#">Home One</a></li>
                              <li class="active">
                                <a href="index-2.html">Home Two</a>
                              </li>
                              <li><a href="index-3.html">Home Three</a></li>
                            </ul> -->
                          </li>
                          <li class="menu-item-has-children">
                            <a href="#">Events</a>
                            <!-- <ul class="sub-menu">
                              <li><a href="events.html">Events</a></li>
                              <li><a href="about.html">About Events</a></li>
                              <li><a href="events-venue.html">Events Venue</a></li>
                              <li><a href="gallery.html">Events Gallery</a></li>
                              <li>
                                <a href="events-details.html">Events Details</a>
                              </li>
                            </ul> -->
                          </li>
                          <li class="menu-item-has-children">
                            <a href="#">Artists & Bands</a>
                            <!-- <ul class="sub-menu">
                              <li><a href="team.html">Speakers</a></li>
                              <li>
                                <a href="#">Speakers Details</a>
                              </li>
                            </ul> -->
                          </li>
                          <!-- <li class="menu-item-has-children">
                            <a href="blog.html">Pages</a>
                            <ul class="sub-menu">
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="blog-details.html">Blog Details</a></li>
                              <li><a href="error.html">Error</a></li>
                              <li><a href="faq.html">Faq</a></li>
                              <li><a href="pricing.html">Pricing</a></li>
                              <li><a href="product.html">Product</a></li>
                              <li>
                                <a href="product-details.html">Product Details</a>
                              </li>
                            </ul>
                          </li> -->
                          <li class="menu-item-has-children">
                            <a href="{{ route('contact') }}">Contact</a>
                          </li>
                          <li class="menu-item-has-children">
                            <a href="{{ route('ticket', ['event' => $highlightedEvent->id ?? 1, 'amount' => $highlightedEvent->tickets['early_bird'] ?? 0]) }}">Buy Tickect</a>
                          </li>
                        </ul>
                      </div>
                    </nav>
                  </div>
                </div>
                <div class="col-xl-3 col-6">
                  <div class="td-menu-right-action td-menu-right-action-2 d-flex align-items-center justify-content-end">
                      <div class="td-header-menu-bar lh-1 p-relative ml-25 ">
                      <button
                        class="tdmenu-offcanvas-open-btn mobile-nav-toggler d-block d-xl-none"
                      >
                        <span></span>
                        <span></span>
                        <span></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Mobile Menu  -->
          <div class="tdmobile__menu">
            <nav class="tdmobile__menu-box">
              <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
              <div class="nav-logo">
                <a href="#"
                  ><img src="assets/img/logo/logo.png" alt="logo" width="100" height="100"
                /></a>
              </div>
              <div class="tdmobile__search">
                <form action="#">
                  <input type="text" placeholder="Search here..." />
                  <button><i class="fas fa-search"></i></button>
                </form>
              </div>
              <div class="tdmobile__menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
              </div>
              <div class="social-links">
                <ul class="list-wrap">
                  <li>
                    <a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="https://x.com/the_pace_mag"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/pace_setter_mag/"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="http://www.youtube.com/@ThePaceSetterMag"><i class="fab fa-youtube"></i></a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="tdmobile__menu-backdrop"></div>
          <!-- End Mobile Menu -->
    
          <!-- offCanvas-menu -->
          <div class="offCanvas__info">
            <div class="offCanvas__close-icon menu-close">
              <button><i class="fa-sharp fa-regular fa-xmark"></i></button>
            </div>
            <div class="offCanvas__logo mb-30">
              <a href="#"
                ><img src="assets/img/logo/logo.png" alt="Logo" width="100" height="100"
              /></a>
            </div>
            <div class="offCanvas__side-info mb-30">
              <div class="contact-list mb-30">
                <h4>Address</h4>
                <a href="https://www.google.com/maps" target="_blank"
                  >Nirobi<br />
                  Kenya</a
                >
              </div>
              <div class="contact-list mb-30">
                <h4>Phone Number</h4>
                <a href="tel:(254) 726846918 "> +(254) 726-846 918             
                  
                  or </a>
                <a href="tel:(254)707000360">+(254) 707-000 360</a>
              </div>
              <div class="contact-list mb-30">
                <h4>Email Address</h4>
                <a href="mailto:thepacesettertalentshow@gmail.com">Thepacesettertalentshow@gmail.com</a>
                
              </div>
            </div>
            <div class="offCanvas__social-icon mt-30">
              <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
              <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
              <a href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a>
              <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="offCanvas__overly"></div>
          <!-- offCanvas-menu-end -->
        </header>
        <!-- header-area-end -->
    
        <!-- main-area -->
        <main class="mt-2">
          <!-- td-hero-area-start -->
    <!-- td-hero-area-start -->
    <img
      class="td-hero-2-bg-shape mt-5"
      src="assets/img/hero/hero-2/bg-shape.png"
      alt=""
    />
    <div class="td-hero-area td-hero-2-spacing fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="td-hero-2-wrap p-relative">
              <div
                  class="td-hero-2-thumb bg-position"
                  data-background="{{ $highlightedEvent && $highlightedEvent->event_image ? asset($highlightedEvent->event_image) : asset('assets/img/hero/hero-2/1744413862_nibenip_by_slnbnsintention_dhkpwtc.jpg') }}"
                >

                <h2
                  class="td-hero-2-title wow td-animetion-left"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.3s"
                >
                 Pace </br>Teenz<br /> Festival <br />
                  2<img src="assets/img/hero/hero-2/zero.png" alt="" />25
                </h2>
              </div>
              <div class="td-hero-social d-flex align-items-center">
                <span>Follow Us On:</span>
                <span
                  ><a href="https://wa.me/254726846918?text=Hello%20Pace%20Setter,%20I%20want%20to%20book%20an%20event"><i class="fa-brands fa-whatsapp"></i></a
                ></span>
                <span
                  ><a href="https://www.instagram.com/pace_setter_mag/"><i class="fa-brands fa-instagram"></i></a
                ></span>
                <span>
                  <a href="https://x.com/the_pace_mag">
                    <svg
                      width="19"
                      height="19"
                      viewBox="0 0 19 19"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M13.8679 1.60596H16.4382L10.8229 8.02398L17.4289 16.7575H12.2564L8.20515 11.4607L3.56956 16.7575H0.997689L7.00391 9.89267L0.666687 1.60596H5.97049L9.6325 6.44745L13.8679 1.60596ZM12.9658 15.219H14.3901L5.1966 3.06361H3.66824L12.9658 15.219Z"
                        fill="currentColor"
                      />
                    </svg>
                  </a>
                </span>
                <span
                  ><a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"><i class="fa-brands fa-facebook"></i></a
                ></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- td-hero-area-end -->
    
    <!-- td-hero-area-end -->
    
          <!-- td-countdown-area-start -->
    <div class="td-countdown-area pt-50">
      <div class="container">
        <div class="row align-items-center d-flex">
          <div class="col-xl-3 col-lg-5 wow fadeInUp order-1" data-wow-duration=".9s" data-wow-delay=".2s">
            <div class="mb-40 td-countdown-2-title">
              <h2 class="title">{{ $highlightedEvent->venue ?? 'Upcoming Event' }}</h2>
              <span class="subtitle">{{ \Carbon\Carbon::parse($highlightedEvent->date ?? now())->format('jS M, Y') }}</span>
          </div>
          
          </div>
    
          <div class="col-xl-5 col-lg-7 wow fadeInUp order-2" data-wow-duration=".9s" data-wow-delay=".4s">
            <div class="mb-20 td-hero-countdown td-countdown-2-wrap">
              <ul class="deal-counter ml0-md" id="timer">
                <li class="mb-20 list-inline-item days"><span>0</span><p class="fs-6">Days</p></li>
                <li class="mb-20 list-inline-item hours"><span>0</span><p class="fs-6">Hrs</p></li>
                <li class="mb-20 list-inline-item minutes"><span>0</span><p class="fs-6">Mins</p></li>
                <li class="mb-20 list-inline-item seconds"><span>0</span><p class="fs-6">Secs</p></li>
              </ul>
            </div>
          </div>
          
    
          <div class="col-xl-3 col-lg-5 wow fadeInUp order-3" data-wow-duration=".9s" data-wow-delay=".2s">
            <div class="mb-40 td-countdown-2-location-wrap text-end">
              <div class="td-countdown-2-location text-start p-relative bg-primary">
                <a class="td-btn-square d-xl-block bg-primary" href="{{ route('ticket', ['event' => $highlightedEvent->id ?? 1, 'amount' => $highlightedEvent->tickets['early_bird'] ?? 0]) }}">Buy
                  <span class="subtitle"> Ticket</span>
                </a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- td-countdown-area-end -->
    
    
    
    
        <!-- td-about-area-start -->
        <div class="td-about-area pt-95">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="td-about-2-thumb p-relative mb-30 image-wrapper">
                  <img
                    class="thumb wow td-animetion-left"
                    data-wow-duration="1.5s"
                    data-wow-delay="0.2s"
                    src="assets/img/about/about-2/about2.jpg"
                    alt="About Image"
                  />
                </div>
              </div>
              
              <div class="col-lg-6">
                <div
                  class="td-about-2-content-wrap ml-55 mb-30 wow fadeInRight"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.3s"
                >
                  <div class="td-about-2-content">
                    <span class="td-section-subtitle td-section-subtitle-2 mb-30">Teens Festive</span>
                    <h2 class="mb-10 td-section-title">TeensFest 2025</h2>
                    <p class="para" style="text-align: justify;">
                      Welcome to Pacesetter Entertainment, the premier party and events company in Nairobi, Kenya. We specialize in creating unforgettable experiences that Educate, Motivate and Entertain. Pace Setter Entertainment was founded in 2023 as an events agency playing at Various institutions across Kenya. Over the years, the company has evolved in scale, capacity, and experience to become a key player in event management and organisation
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- td-about-area-end -->
    
    
    
    
    
          <!-- td-counter-area-start -->
          <div class="td-counter-area pt-70 pb-115">
            <div class="container ">
              <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                  <div class="td-counter-2-wrap ml-30 mb-30">
                    <span class="mr-20 td-counter-2-icon">
                      <i class="flaticon-speaker"></i>
                    </span>
                    <div class="td-counter-2-content">
                      <h2 class="td-counter-2-title count">
                        <span class="odometer" data-count="65"></span>+
                      </h2>
                      <span class="td-counter-2-subtitle">Artists</span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                  <div class="td-counter-2-wrap ml-30 mb-30">
                    <span class="mr-20 td-counter-2-icon">
                      <svg
                        width="80"
                        height="80"
                        viewBox="0 0 80 80"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_100_1756)">
                          <rect width="80" height="80" fill="white" />
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M40.3 80.6C39.06 80.6 37.82 80.42 36.63 80.06C33.84 79.21 31.41 77.41 29.79 74.98C28.17 72.55 27.43 69.62 27.72 66.71C28.01 63.81 29.3 61.07 31.36 59.01C32.54 57.83 33.92 56.91 35.46 56.27C37 55.63 38.62 55.31 40.28 55.31C43.22 55.31 46.07 56.33 48.32 58.18C50.58 60.03 52.13 62.63 52.7 65.49C53.27 68.35 52.83 71.34 51.45 73.92C50.07 76.49 47.83 78.53 45.14 79.64C43.6 80.28 41.97 80.6 40.3 80.6ZM34.61 76C36.28 77.18 38.25 77.81 40.3 77.81C42.35 77.81 44.32 77.18 45.99 76C46 75.89 46 75.78 46 75.66C46 74.16 45.39 72.69 44.33 71.63C43.25 70.55 41.82 69.96 40.3 69.96C38.78 69.96 37.35 70.55 36.27 71.63C35.21 72.69 34.6 74.16 34.6 75.66C34.6 75.78 34.6 75.9 34.61 76ZM44.34 68.19C45.38 68.76 46.31 69.54 47.03 70.49C47.7 71.36 48.2 72.37 48.49 73.44C49.39 72.1 49.95 70.55 50.11 68.93C50.29 67.1 49.96 65.25 49.15 63.6C48.34 61.95 47.08 60.56 45.51 59.58C43.95 58.61 42.14 58.09 40.3 58.09C38.46 58.09 36.66 58.61 35.09 59.58C33.53 60.55 32.27 61.94 31.45 63.6C30.64 65.25 30.3 67.1 30.49 68.93C30.65 70.55 31.21 72.09 32.11 73.44C32.4 72.38 32.9 71.37 33.57 70.49C34.29 69.55 35.22 68.76 36.26 68.19C35.57 67.44 35.1 66.53 34.9 65.52C34.69 64.45 34.8 63.35 35.21 62.34C35.63 61.33 36.33 60.48 37.24 59.87C38.15 59.26 39.21 58.94 40.3 58.94C41.39 58.94 42.45 59.26 43.36 59.87C44.27 60.48 44.97 61.33 45.39 62.34C45.81 63.35 45.92 64.45 45.7 65.52C45.5 66.53 45.03 67.45 44.34 68.19ZM40.3 61.73C39.67 61.73 39.06 61.95 38.57 62.35C38.08 62.75 37.75 63.31 37.63 63.92C37.51 64.54 37.6 65.18 37.9 65.73C38.2 66.28 38.68 66.72 39.26 66.96C39.59 67.1 39.94 67.17 40.3 67.17C40.57 67.17 40.83 67.13 41.09 67.05C41.69 66.87 42.21 66.48 42.56 65.96C42.91 65.44 43.07 64.81 43.01 64.18C42.95 63.56 42.67 62.97 42.23 62.52C41.98 62.27 41.68 62.07 41.35 61.93C41.01 61.8 40.66 61.73 40.3 61.73ZM55.71 65.28C55.34 65.28 54.99 65.13 54.72 64.87C54.46 64.61 54.31 64.26 54.31 63.89C54.31 63.52 54.45 63.17 54.72 62.9L62.89 54.73C63.02 54.6 63.17 54.5 63.34 54.43C63.51 54.36 63.69 54.32 63.87 54.32C64.05 54.32 64.23 54.36 64.4 54.43C64.57 54.5 64.72 54.6 64.85 54.73C64.98 54.86 65.08 55.01 65.15 55.18C65.22 55.35 65.26 55.53 65.26 55.71C65.26 55.89 65.22 56.07 65.15 56.24C65.08 56.41 64.98 56.56 64.85 56.69L56.68 64.86C56.44 65.13 56.09 65.28 55.71 65.28ZM24.88 65.28C24.51 65.28 24.16 65.13 23.89 64.87L15.72 56.7C15.59 56.57 15.49 56.42 15.42 56.25C15.35 56.08 15.31 55.9 15.31 55.72C15.31 55.54 15.35 55.36 15.42 55.19C15.49 55.02 15.59 54.87 15.72 54.74C15.85 54.61 16 54.51 16.17 54.44C16.34 54.37 16.52 54.33 16.7 54.33C16.88 54.33 17.06 54.37 17.23 54.44C17.4 54.51 17.55 54.61 17.68 54.74L25.85 62.91C26.11 63.17 26.26 63.52 26.26 63.9C26.26 64.28 26.12 64.62 25.85 64.88C25.61 65.13 25.26 65.28 24.88 65.28ZM67.95 52.95C66.71 52.95 65.47 52.77 64.28 52.41C61.49 51.56 59.06 49.76 57.44 47.33C55.82 44.9 55.08 41.97 55.37 39.06C55.66 36.16 56.95 33.42 59.01 31.36C60.19 30.18 61.57 29.26 63.11 28.62C64.65 27.98 66.27 27.66 67.94 27.66C70.87 27.66 73.72 28.68 75.98 30.53C78.23 32.38 79.79 34.98 80.36 37.84C80.93 40.7 80.49 43.7 79.11 46.27C77.73 48.84 75.49 50.87 72.8 51.99C71.25 52.62 69.62 52.95 67.95 52.95ZM62.26 48.35C63.93 49.53 65.9 50.16 67.95 50.16C70 50.16 71.97 49.53 73.64 48.35C73.65 48.23 73.65 48.12 73.65 48.01C73.65 47.25 73.51 46.52 73.22 45.82C72.93 45.12 72.52 44.5 71.99 43.96C71.46 43.42 70.83 43.01 70.14 42.72C69.44 42.43 68.71 42.28 67.95 42.28C67.19 42.28 66.46 42.43 65.76 42.72C65.06 43.01 64.44 43.43 63.91 43.96C63.38 44.5 62.96 45.12 62.68 45.82C62.39 46.52 62.25 47.26 62.25 48.01C62.25 48.13 62.25 48.24 62.26 48.35ZM71.99 40.54C73.03 41.11 73.96 41.89 74.68 42.84C75.35 43.72 75.85 44.72 76.14 45.79C77.04 44.45 77.6 42.9 77.76 41.28C77.94 39.45 77.61 37.6 76.8 35.95C75.99 34.3 74.73 32.91 73.16 31.93C71.6 30.96 69.79 30.44 67.95 30.44C66.11 30.44 64.3 30.96 62.74 31.93C61.18 32.9 59.92 34.29 59.1 35.95C58.29 37.6 57.95 39.45 58.14 41.28C58.3 42.9 58.86 44.44 59.76 45.79C60.05 44.73 60.55 43.72 61.22 42.84C61.94 41.9 62.87 41.11 63.91 40.54C63.22 39.79 62.75 38.88 62.55 37.87C62.34 36.8 62.45 35.7 62.86 34.69C63.28 33.68 63.98 32.83 64.89 32.22C65.8 31.61 66.86 31.29 67.95 31.29C69.04 31.29 70.1 31.61 71.01 32.22C71.92 32.83 72.62 33.68 73.04 34.69C73.46 35.7 73.57 36.8 73.35 37.87C73.15 38.88 72.69 39.79 71.99 40.54ZM67.95 34.08C67.32 34.08 66.71 34.3 66.22 34.7C65.73 35.1 65.4 35.66 65.28 36.27C65.16 36.89 65.25 37.53 65.55 38.08C65.85 38.63 66.33 39.07 66.91 39.31C67.24 39.45 67.59 39.52 67.95 39.52C68.22 39.52 68.48 39.48 68.74 39.4C69.34 39.22 69.86 38.83 70.21 38.31C70.56 37.79 70.72 37.16 70.65 36.53C70.59 35.9 70.31 35.32 69.87 34.87C69.62 34.62 69.32 34.42 68.99 34.28C68.66 34.15 68.31 34.08 67.95 34.08ZM12.65 52.95C11.41 52.95 10.17 52.77 8.97996 52.41C6.18996 51.56 3.75996 49.76 2.13996 47.33C0.519964 44.9 -0.220036 41.97 0.0699637 39.06C0.359964 36.16 1.64996 33.42 3.70996 31.36C4.88996 30.18 6.26996 29.26 7.80996 28.62C9.34996 27.98 10.97 27.66 12.64 27.66C15.57 27.66 18.42 28.68 20.68 30.53C22.94 32.38 24.49 34.98 25.06 37.84C25.63 40.7 25.18 43.69 23.81 46.27C22.43 48.84 20.19 50.87 17.5 51.99C15.94 52.62 14.32 52.95 12.65 52.95ZM6.94996 48.35C8.61996 49.53 10.59 50.16 12.64 50.16C14.69 50.16 16.66 49.53 18.33 48.35C18.34 48.23 18.34 48.12 18.34 48.01C18.34 47.25 18.2 46.52 17.91 45.82C17.62 45.12 17.21 44.5 16.68 43.96C16.15 43.42 15.52 43.01 14.83 42.72C14.13 42.43 13.4 42.28 12.64 42.28C11.89 42.28 11.15 42.43 10.45 42.72C9.75996 43 9.13996 43.42 8.59996 43.96C8.06996 44.5 7.64996 45.12 7.36996 45.82C7.07996 46.52 6.93996 47.25 6.93996 48.01C6.93996 48.13 6.94996 48.24 6.94996 48.35ZM16.69 40.54C17.73 41.11 18.66 41.89 19.38 42.84C20.05 43.71 20.55 44.72 20.84 45.79C21.74 44.45 22.3 42.9 22.46 41.28C22.64 39.45 22.31 37.6 21.5 35.95C20.69 34.3 19.43 32.91 17.86 31.93C16.3 30.96 14.49 30.44 12.65 30.44C10.81 30.44 8.99996 30.96 7.43996 31.93C5.86996 32.9 4.61996 34.29 3.79996 35.95C2.98996 37.6 2.64996 39.45 2.83996 41.28C2.99996 42.9 3.54996 44.44 4.44996 45.78C4.73996 44.72 5.23996 43.71 5.90996 42.83C6.62996 41.89 7.55996 41.1 8.59996 40.53C7.90996 39.78 7.43996 38.87 7.23996 37.86C7.02996 36.79 7.13996 35.69 7.54996 34.68C7.95996 33.67 8.66996 32.82 9.57996 32.21C10.49 31.6 11.55 31.28 12.64 31.28C13.73 31.28 14.79 31.6 15.7 32.21C16.61 32.82 17.31 33.67 17.73 34.68C18.15 35.69 18.26 36.79 18.04 37.86C17.85 38.88 17.38 39.79 16.69 40.54ZM12.65 34.08C12.02 34.08 11.41 34.3 10.92 34.7C10.43 35.1 10.1 35.66 9.97996 36.27C9.85996 36.89 9.94996 37.53 10.25 38.08C10.55 38.63 11.03 39.07 11.61 39.31C11.94 39.45 12.29 39.52 12.65 39.52C12.92 39.52 13.18 39.48 13.44 39.4C14.04 39.22 14.56 38.83 14.91 38.31C15.26 37.79 15.42 37.16 15.36 36.53C15.3 35.91 15.02 35.32 14.58 34.87C14.33 34.62 14.03 34.42 13.7 34.28C13.36 34.15 13.01 34.08 12.65 34.08ZM63.89 26.28C63.52 26.28 63.17 26.14 62.9 25.87L54.73 17.7C54.6 17.57 54.5 17.42 54.43 17.25C54.36 17.08 54.32 16.9 54.32 16.72C54.32 16.54 54.36 16.36 54.43 16.19C54.5 16.02 54.6 15.87 54.73 15.74C54.86 15.61 55.01 15.51 55.18 15.44C55.35 15.37 55.53 15.33 55.71 15.33C55.89 15.33 56.07 15.37 56.24 15.44C56.41 15.51 56.56 15.61 56.69 15.74L64.86 23.91C65.12 24.17 65.27 24.53 65.27 24.9C65.27 25.27 65.13 25.62 64.86 25.89C64.61 26.13 64.26 26.28 63.89 26.28ZM16.71 26.28C16.53 26.28 16.35 26.24 16.18 26.17C16.01 26.1 15.86 26 15.73 25.87C15.6 25.74 15.5 25.59 15.43 25.42C15.36 25.25 15.32 25.07 15.32 24.89C15.32 24.71 15.36 24.53 15.43 24.36C15.5 24.19 15.6 24.04 15.73 23.91L23.9 15.74C24.03 15.61 24.18 15.51 24.35 15.44C24.52 15.37 24.7 15.33 24.88 15.33C25.06 15.33 25.24 15.37 25.41 15.44C25.58 15.51 25.73 15.61 25.86 15.74C25.99 15.87 26.09 16.02 26.16 16.19C26.23 16.36 26.27 16.54 26.27 16.72C26.27 16.9 26.23 17.08 26.16 17.25C26.09 17.42 25.99 17.57 25.86 17.7L17.69 25.87C17.56 26 17.41 26.1 17.24 26.17C17.08 26.24 16.9 26.28 16.71 26.28ZM40.3 25.29C39.06 25.29 37.82 25.11 36.63 24.75C33.84 23.9 31.41 22.1 29.79 19.67C28.17 17.24 27.43 14.31 27.72 11.4C28.01 8.5 29.3 5.76 31.36 3.7C32.54 2.52 33.92 1.59 35.46 0.96C37 0.32 38.62 0 40.28 0C43.21 0 46.06 1.02 48.32 2.87C50.58 4.72 52.13 7.32 52.7 10.18C53.27 13.04 52.83 16.03 51.45 18.61C50.07 21.18 47.83 23.21 45.14 24.33C43.6 24.97 41.97 25.29 40.3 25.29ZM34.61 20.7C36.28 21.88 38.25 22.51 40.3 22.51C42.35 22.51 44.32 21.88 45.99 20.7C46 20.58 46 20.47 46 20.35C46 18.83 45.41 17.4 44.33 16.32C43.25 15.24 41.82 14.65 40.3 14.65C38.78 14.65 37.35 15.24 36.27 16.32C35.19 17.4 34.6 18.83 34.6 20.35C34.6 20.47 34.6 20.59 34.61 20.7ZM44.34 12.89C45.38 13.46 46.31 14.24 47.03 15.19C47.7 16.06 48.2 17.07 48.49 18.14C49.39 16.8 49.95 15.25 50.11 13.63C50.29 11.8 49.96 9.95 49.15 8.3C48.34 6.65 47.08 5.26 45.51 4.28C43.95 3.31 42.14 2.79 40.3 2.79C38.46 2.79 36.66 3.31 35.09 4.28C33.53 5.25 32.27 6.64 31.45 8.3C30.64 9.95 30.3 11.8 30.49 13.63C30.65 15.25 31.21 16.79 32.11 18.14C32.4 17.08 32.9 16.07 33.57 15.19C34.29 14.25 35.22 13.46 36.26 12.89C35.57 12.14 35.1 11.23 34.9 10.22C34.69 9.15 34.8 8.05 35.21 7.04C35.63 6.03 36.33 5.18 37.24 4.57C38.15 3.96 39.21 3.64 40.3 3.64C41.39 3.64 42.45 3.96 43.36 4.57C44.27 5.18 44.97 6.03 45.39 7.04C45.81 8.05 45.92 9.15 45.7 10.22C45.5 11.22 45.03 12.14 44.34 12.89ZM40.3 6.43C39.76 6.43 39.24 6.59 38.79 6.89C38.27 7.24 37.88 7.76 37.7 8.36C37.52 8.96 37.55 9.61 37.79 10.19C38.03 10.77 38.47 11.25 39.02 11.55C39.41 11.76 39.86 11.87 40.3 11.87C40.48 11.87 40.65 11.85 40.83 11.82C41.45 11.7 42 11.36 42.4 10.88C42.8 10.4 43.02 9.78 43.02 9.15C43.02 8.79 42.95 8.44 42.81 8.11C42.67 7.78 42.47 7.48 42.22 7.23C41.78 6.79 41.19 6.51 40.56 6.45C40.48 6.43 40.39 6.43 40.3 6.43Z"
                            fill="#F248B4"
                          />
                        </g>
                        <defs>
                          <clipPath id="clip0_100_1756">
                            <rect width="80" height="80" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                    <div class="td-counter-2-content">
                      <h2 class="td-counter-2-title count">
                        <span class="odometer" data-count="10"></span>
                        +
                      </h2>
                      <span class="td-counter-2-subtitle">Experiences</span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                  <div class="td-counter-2-wrap ml-30 mb-30">
                    <span class="mr-20 td-counter-2-icon">
                      <i class="flaticon-fastfood"></i>
                    </span>
                    <div class="td-counter-2-content">
                      <h2 class="td-counter-2-title count">
                        <span class="odometer" data-count="16"></span>+
                      </h2>
                      <span class="td-counter-2-subtitle">Snacks & Facilities</span>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- td-counter-area-end -->
    
          <!-- td-team-area-start -->
          <div
            class="td-team-area bg-position pt-140 pb-135"
            data-background="assets/img/team/team-2/bg.jpg"
          >
            <div class="container">
              <div class="mb-20 row align-items-center">
                <div class="col-lg-6">
                  <div
                    class="td-brands-title-wrap mb-25 wow fadeInLeft"
                    data-wow-duration="1.5s"
                    data-wow-delay="0.3s"
                  >
                    <span
                      class="mb-20 td-section-subtitle td-section-subtitle-2 mb-30"
                      >Artists & Speakers</span
                    >
                    <h2 class="td-section-title">
                      Our Amazing & Creative <br />event Artists
                    </h2>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div
                  class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.2s"
                >
                  <div class="td-team-2-iteam p-relative mb-30">
                    <svg
                      class="bg-svg"
                      width="319"
                      height="370"
                      viewBox="0 0 319 370"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <mask id="path-1-inside-1_100_1636" fill="white">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        />
                      </mask>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        fill="white"
                      />
                      <path
                        d="M7.12483 331.212L7.76858 330.447L7.12483 331.212ZM47.6501 365.305L47.0063 366.07L47.6501 365.305ZM267.725 4.72218L267.08 5.48608L267.725 4.72218ZM254.818 -1H23V1H254.818V-1ZM312.552 41.2837L268.37 3.95829L267.08 5.48608L311.262 42.8115L312.552 41.2837ZM320 347V57.3254H318V347H320ZM296 371C309.255 371 320 360.255 320 347H318C318 359.15 308.15 369 296 369V371ZM60.5252 371H296V369H60.5252V371ZM6.48107 331.977L47.0063 366.07L48.2938 364.539L7.76858 330.447L6.48107 331.977ZM-1 23V315.908H1V23H-1ZM23 -1C9.74517 -1 -1 9.74517 -1 23H1C1 10.8497 10.8497 1 23 1V-1ZM7.76858 330.447C3.47731 326.837 1 321.515 1 315.908H-1C-1 322.106 1.73808 327.987 6.48107 331.977L7.76858 330.447ZM311.262 42.8115C315.535 46.4216 318 51.7314 318 57.3254H320C320 51.1425 317.275 45.2738 312.552 41.2837L311.262 42.8115ZM60.5252 369C56.05 369 51.7184 367.42 48.2938 364.539L47.0063 366.07C50.7914 369.254 55.5789 371 60.5252 371V369ZM254.818 1C259.307 1 263.651 2.58925 267.08 5.48608L268.37 3.95829C264.581 0.756543 259.779 -1 254.818 -1V1Z"
                        fill="#AEAEAE"
                        mask="url(#path-1-inside-1_100_1636)"
                      />
                    </svg>
                    <img
                      class="team-gradiant-bg"
                      src="assets/img/team/team-2/shape.png"
                      alt=""
                    />
                    <div class="td-team-2-thumb fix mb-25">
                      <img
                        class="w-100"
                        src="assets/img/team/team-2/1.jpg"
                        alt=""
                      />
                    </div>
                    <div class="td-team-2-content ml-30">
                      <h2 class="td-team-2-title">
                        <a href="#">Events</a>
                      </h2>
                      <span class="td-team-2-position">Events</span>
                    </div>
                    <div class="td-team-2-social">
                      <a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"
                        ><i class="fa-brands fa-facebook"></i><span></span
                      ></a>
                      <a href="https://x.com/the_pace_mag">
                        <svg
                          width="19"
                          height="19"
                          viewBox="0 0 19 19"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M13.8678 1.42407H16.4381L10.8227 7.8421L17.4288 16.5756H12.2563L8.20503 11.2788L3.56944 16.5756H0.997567L7.00378 9.71078L0.666565 1.42407H5.97037L9.63238 6.26556L13.8678 1.42407ZM12.9657 15.0371H14.39L5.19648 2.88173H3.66812L12.9657 15.0371Z"
                            fill="currentColor"
                          />
                        </svg>
                        <span></span>
                      </a>
                      <a href="https://www.instagram.com/pace_setter_mag/"
                        ><i class="fa-brands fa-instagram"></i><span></span
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.3s"
                >
                  <div class="td-team-2-iteam p-relative mb-30">
                    <svg
                      class="bg-svg"
                      width="319"
                      height="370"
                      viewBox="0 0 319 370"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <mask id="path-1-inside-1_1100_1636" fill="white">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        />
                      </mask>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        fill="white"
                      />
                      <path
                        d="M7.12483 331.212L7.76858 330.447L7.12483 331.212ZM47.6501 365.305L47.0063 366.07L47.6501 365.305ZM267.725 4.72218L267.08 5.48608L267.725 4.72218ZM254.818 -1H23V1H254.818V-1ZM312.552 41.2837L268.37 3.95829L267.08 5.48608L311.262 42.8115L312.552 41.2837ZM320 347V57.3254H318V347H320ZM296 371C309.255 371 320 360.255 320 347H318C318 359.15 308.15 369 296 369V371ZM60.5252 371H296V369H60.5252V371ZM6.48107 331.977L47.0063 366.07L48.2938 364.539L7.76858 330.447L6.48107 331.977ZM-1 23V315.908H1V23H-1ZM23 -1C9.74517 -1 -1 9.74517 -1 23H1C1 10.8497 10.8497 1 23 1V-1ZM7.76858 330.447C3.47731 326.837 1 321.515 1 315.908H-1C-1 322.106 1.73808 327.987 6.48107 331.977L7.76858 330.447ZM311.262 42.8115C315.535 46.4216 318 51.7314 318 57.3254H320C320 51.1425 317.275 45.2738 312.552 41.2837L311.262 42.8115ZM60.5252 369C56.05 369 51.7184 367.42 48.2938 364.539L47.0063 366.07C50.7914 369.254 55.5789 371 60.5252 371V369ZM254.818 1C259.307 1 263.651 2.58925 267.08 5.48608L268.37 3.95829C264.581 0.756543 259.779 -1 254.818 -1V1Z"
                        fill="#AEAEAE"
                        mask="url(#path-1-inside-1_100_1636)"
                      />
                    </svg>
                    <img
                      class="team-gradiant-bg"
                      src="assets/img/team/team-2/shape.png"
                      alt=""
                    />
                    <div class="td-team-2-thumb fix mb-25">
                      <img
                        class="w-100"
                        src="assets/img/team/team-2/2.jpg"
                        alt=""
                      />
                    </div>
                    <div class="td-team-2-content ml-30">
                      <h2 class="td-team-2-title">
                        <a href="#">Dj Deweez</a>
                      </h2>
                      <span class="td-team-2-position">Deejay</span>
                    </div>
                    <div class="td-team-2-social">
                      <a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"
                        ><i class="fa-brands fa-facebook"></i><span></span
                      ></a>
                      <a href="https://x.com/the_pace_mag">
                        <svg
                          width="19"
                          height="19"
                          viewBox="0 0 19 19"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M13.8678 1.42407H16.4381L10.8227 7.8421L17.4288 16.5756H12.2563L8.20503 11.2788L3.56944 16.5756H0.997567L7.00378 9.71078L0.666565 1.42407H5.97037L9.63238 6.26556L13.8678 1.42407ZM12.9657 15.0371H14.39L5.19648 2.88173H3.66812L12.9657 15.0371Z"
                            fill="currentColor"
                          />
                        </svg>
                        <span></span>
                      </a>
                      <a href="https://www.instagram.com/pace_setter_mag/"
                        ><i class="fa-brands fa-instagram"></i><span></span
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.4s"
                >
                  <div class="td-team-2-iteam p-relative mb-30">
                    <svg
                      class="bg-svg"
                      width="319"
                      height="370"
                      viewBox="0 0 319 370"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <mask id="path-1-inside-1_1200_1636" fill="white">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        />
                      </mask>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        fill="white"
                      />
                      <path
                        d="M7.12483 331.212L7.76858 330.447L7.12483 331.212ZM47.6501 365.305L47.0063 366.07L47.6501 365.305ZM267.725 4.72218L267.08 5.48608L267.725 4.72218ZM254.818 -1H23V1H254.818V-1ZM312.552 41.2837L268.37 3.95829L267.08 5.48608L311.262 42.8115L312.552 41.2837ZM320 347V57.3254H318V347H320ZM296 371C309.255 371 320 360.255 320 347H318C318 359.15 308.15 369 296 369V371ZM60.5252 371H296V369H60.5252V371ZM6.48107 331.977L47.0063 366.07L48.2938 364.539L7.76858 330.447L6.48107 331.977ZM-1 23V315.908H1V23H-1ZM23 -1C9.74517 -1 -1 9.74517 -1 23H1C1 10.8497 10.8497 1 23 1V-1ZM7.76858 330.447C3.47731 326.837 1 321.515 1 315.908H-1C-1 322.106 1.73808 327.987 6.48107 331.977L7.76858 330.447ZM311.262 42.8115C315.535 46.4216 318 51.7314 318 57.3254H320C320 51.1425 317.275 45.2738 312.552 41.2837L311.262 42.8115ZM60.5252 369C56.05 369 51.7184 367.42 48.2938 364.539L47.0063 366.07C50.7914 369.254 55.5789 371 60.5252 371V369ZM254.818 1C259.307 1 263.651 2.58925 267.08 5.48608L268.37 3.95829C264.581 0.756543 259.779 -1 254.818 -1V1Z"
                        fill="#AEAEAE"
                        mask="url(#path-1-inside-1_100_1636)"
                      />
                    </svg>
                    <img
                      class="team-gradiant-bg"
                      src="assets/img/team/team-2/shape.png"
                      alt=""
                    />
                    <div class="td-team-2-thumb fix mb-25">
                      <img
                        class="w-100"
                        src="assets/img/team/team-2/3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="td-team-2-content ml-30">
                      <h2 class="td-team-2-title">
                        <a href="#">Event</a>
                      </h2>
                      <span class="td-team-2-position">Event</span>
                    </div>
                    <div class="td-team-2-social">
                      <a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"
                        ><i class="fa-brands fa-facebook"></i><span></span
                      ></a>
                      <a href="https://x.com/the_pace_mag">
                        <svg
                          width="19"
                          height="19"
                          viewBox="0 0 19 19"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M13.8678 1.42407H16.4381L10.8227 7.8421L17.4288 16.5756H12.2563L8.20503 11.2788L3.56944 16.5756H0.997567L7.00378 9.71078L0.666565 1.42407H5.97037L9.63238 6.26556L13.8678 1.42407ZM12.9657 15.0371H14.39L5.19648 2.88173H3.66812L12.9657 15.0371Z"
                            fill="currentColor"
                          />
                        </svg>
                        <span></span>
                      </a>
                      <a href="https://www.instagram.com/pace_setter_mag/"
                        ><i class="fa-brands fa-instagram"></i><span></span
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.5s"
                >
                  <div class="td-team-2-iteam p-relative mb-30">
                    <svg
                      class="bg-svg"
                      width="319"
                      height="370"
                      viewBox="0 0 319 370"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <mask id="path-1-inside-1_1300_1636" fill="white">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        />
                      </mask>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        fill="white"
                      />
                      <path
                        d="M7.12483 331.212L7.76858 330.447L7.12483 331.212ZM47.6501 365.305L47.0063 366.07L47.6501 365.305ZM267.725 4.72218L267.08 5.48608L267.725 4.72218ZM254.818 -1H23V1H254.818V-1ZM312.552 41.2837L268.37 3.95829L267.08 5.48608L311.262 42.8115L312.552 41.2837ZM320 347V57.3254H318V347H320ZM296 371C309.255 371 320 360.255 320 347H318C318 359.15 308.15 369 296 369V371ZM60.5252 371H296V369H60.5252V371ZM6.48107 331.977L47.0063 366.07L48.2938 364.539L7.76858 330.447L6.48107 331.977ZM-1 23V315.908H1V23H-1ZM23 -1C9.74517 -1 -1 9.74517 -1 23H1C1 10.8497 10.8497 1 23 1V-1ZM7.76858 330.447C3.47731 326.837 1 321.515 1 315.908H-1C-1 322.106 1.73808 327.987 6.48107 331.977L7.76858 330.447ZM311.262 42.8115C315.535 46.4216 318 51.7314 318 57.3254H320C320 51.1425 317.275 45.2738 312.552 41.2837L311.262 42.8115ZM60.5252 369C56.05 369 51.7184 367.42 48.2938 364.539L47.0063 366.07C50.7914 369.254 55.5789 371 60.5252 371V369ZM254.818 1C259.307 1 263.651 2.58925 267.08 5.48608L268.37 3.95829C264.581 0.756543 259.779 -1 254.818 -1V1Z"
                        fill="#AEAEAE"
                        mask="url(#path-1-inside-1_100_1636)"
                      />
                    </svg>
                    <img
                      class="team-gradiant-bg"
                      src="assets/img/team/team-2/shape.png"
                      alt=""
                    />
                    <div class="td-team-2-thumb fix mb-25">
                      <img
                        class="w-100"
                        src="assets/img/team/team-2/4.jpg"
                        alt=""
                      />
                    </div>
                    <div class="td-team-2-content ml-30">
                      <h2 class="td-team-2-title">
                        <a href="#">Events</a>
                      </h2>
                      <span class="td-team-2-position">Event</span>
                    </div>
                    <div class="td-team-2-social">
                      <a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"
                        ><i class="fa-brands fa-facebook"></i><span></span
                      ></a>
                      <a href="https://x.com/the_pace_mag">
                        <svg
                          width="19"
                          height="19"
                          viewBox="0 0 19 19"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M13.8678 1.42407H16.4381L10.8227 7.8421L17.4288 16.5756H12.2563L8.20503 11.2788L3.56944 16.5756H0.997567L7.00378 9.71078L0.666565 1.42407H5.97037L9.63238 6.26556L13.8678 1.42407ZM12.9657 15.0371H14.39L5.19648 2.88173H3.66812L12.9657 15.0371Z"
                            fill="currentColor"
                          />
                        </svg>
                        <span></span>
                      </a>
                      <a href="https://www.instagram.com/pace_setter_mag/"
                        ><i class="fa-brands fa-instagram"></i><span></span
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.6s"
                >
                  <div class="td-team-2-iteam p-relative mb-30">
                    <svg
                      class="bg-svg"
                      width="319"
                      height="370"
                      viewBox="0 0 319 370"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <mask id="path-1-inside-1_1400_1636" fill="white">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        />
                      </mask>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        fill="white"
                      />
                      <path
                        d="M7.12483 331.212L7.76858 330.447L7.12483 331.212ZM47.6501 365.305L47.0063 366.07L47.6501 365.305ZM267.725 4.72218L267.08 5.48608L267.725 4.72218ZM254.818 -1H23V1H254.818V-1ZM312.552 41.2837L268.37 3.95829L267.08 5.48608L311.262 42.8115L312.552 41.2837ZM320 347V57.3254H318V347H320ZM296 371C309.255 371 320 360.255 320 347H318C318 359.15 308.15 369 296 369V371ZM60.5252 371H296V369H60.5252V371ZM6.48107 331.977L47.0063 366.07L48.2938 364.539L7.76858 330.447L6.48107 331.977ZM-1 23V315.908H1V23H-1ZM23 -1C9.74517 -1 -1 9.74517 -1 23H1C1 10.8497 10.8497 1 23 1V-1ZM7.76858 330.447C3.47731 326.837 1 321.515 1 315.908H-1C-1 322.106 1.73808 327.987 6.48107 331.977L7.76858 330.447ZM311.262 42.8115C315.535 46.4216 318 51.7314 318 57.3254H320C320 51.1425 317.275 45.2738 312.552 41.2837L311.262 42.8115ZM60.5252 369C56.05 369 51.7184 367.42 48.2938 364.539L47.0063 366.07C50.7914 369.254 55.5789 371 60.5252 371V369ZM254.818 1C259.307 1 263.651 2.58925 267.08 5.48608L268.37 3.95829C264.581 0.756543 259.779 -1 254.818 -1V1Z"
                        fill="#AEAEAE"
                        mask="url(#path-1-inside-1_100_1636)"
                      />
                    </svg>
                    <img
                      class="team-gradiant-bg"
                      src="assets/img/team/team-2/shape.png"
                      alt=""
                    />
                    <div class="td-team-2-thumb fix mb-25">
                      <img
                        class="w-100"
                        src="assets/img/team/team-2/5.jpg"
                        alt=""
                      />
                    </div>
                    <div class="td-team-2-content ml-30">
                      <h2 class="td-team-2-title">
                        <a href="#">Events</a>
                      </h2>
                      <span class="td-team-2-position">Event</span>
                    </div>
                    <div class="td-team-2-social">
                      <a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"
                        ><i class="fa-brands fa-facebook"></i><span></span
                      ></a>
                      <a href="https://x.com/the_pace_mag">
                        <svg
                          width="19"
                          height="19"
                          viewBox="0 0 19 19"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M13.8678 1.42407H16.4381L10.8227 7.8421L17.4288 16.5756H12.2563L8.20503 11.2788L3.56944 16.5756H0.997567L7.00378 9.71078L0.666565 1.42407H5.97037L9.63238 6.26556L13.8678 1.42407ZM12.9657 15.0371H14.39L5.19648 2.88173H3.66812L12.9657 15.0371Z"
                            fill="currentColor"
                          />
                        </svg>
                        <span></span>
                      </a>
                      <a href="https://www.instagram.com/pace_setter_mag/"
                        ><i class="fa-brands fa-instagram"></i><span></span
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.7s"
                >
                  <div class="td-team-2-iteam p-relative mb-30">
                    <svg
                      class="bg-svg"
                      width="319"
                      height="370"
                      viewBox="0 0 319 370"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <mask id="path-1-inside-1_1500_1636" fill="white">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        />
                      </mask>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        fill="white"
                      />
                      <path
                        d="M7.12483 331.212L7.76858 330.447L7.12483 331.212ZM47.6501 365.305L47.0063 366.07L47.6501 365.305ZM267.725 4.72218L267.08 5.48608L267.725 4.72218ZM254.818 -1H23V1H254.818V-1ZM312.552 41.2837L268.37 3.95829L267.08 5.48608L311.262 42.8115L312.552 41.2837ZM320 347V57.3254H318V347H320ZM296 371C309.255 371 320 360.255 320 347H318C318 359.15 308.15 369 296 369V371ZM60.5252 371H296V369H60.5252V371ZM6.48107 331.977L47.0063 366.07L48.2938 364.539L7.76858 330.447L6.48107 331.977ZM-1 23V315.908H1V23H-1ZM23 -1C9.74517 -1 -1 9.74517 -1 23H1C1 10.8497 10.8497 1 23 1V-1ZM7.76858 330.447C3.47731 326.837 1 321.515 1 315.908H-1C-1 322.106 1.73808 327.987 6.48107 331.977L7.76858 330.447ZM311.262 42.8115C315.535 46.4216 318 51.7314 318 57.3254H320C320 51.1425 317.275 45.2738 312.552 41.2837L311.262 42.8115ZM60.5252 369C56.05 369 51.7184 367.42 48.2938 364.539L47.0063 366.07C50.7914 369.254 55.5789 371 60.5252 371V369ZM254.818 1C259.307 1 263.651 2.58925 267.08 5.48608L268.37 3.95829C264.581 0.756543 259.779 -1 254.818 -1V1Z"
                        fill="#AEAEAE"
                        mask="url(#path-1-inside-1_100_1636)"
                      />
                    </svg>
                    <img
                      class="team-gradiant-bg"
                      src="assets/img/team/team-2/shape.png"
                      alt=""
                    />
                    <div class="td-team-2-thumb fix mb-25">
                      <img
                        class="w-100"
                        src="assets/img/team/team-2/6.jpg"
                        alt=""
                      />
                    </div>
                    <div class="td-team-2-content ml-30">
                      <h2 class="td-team-2-title">
                        <a href="#">Event</a>
                      </h2>
                      <span class="td-team-2-position">Event</span>
                    </div>
                    <div class="td-team-2-social">
                      <a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"
                        ><i class="fa-brands fa-facebook"></i><span></span
                      ></a>
                      <a href="https://x.com/the_pace_mag">
                        <svg
                          width="19"
                          height="19"
                          viewBox="0 0 19 19"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M13.8678 1.42407H16.4381L10.8227 7.8421L17.4288 16.5756H12.2563L8.20503 11.2788L3.56944 16.5756H0.997567L7.00378 9.71078L0.666565 1.42407H5.97037L9.63238 6.26556L13.8678 1.42407ZM12.9657 15.0371H14.39L5.19648 2.88173H3.66812L12.9657 15.0371Z"
                            fill="currentColor"
                          />
                        </svg>
                        <span></span>
                      </a>
                      <a href="https://www.instagram.com/pace_setter_mag/"
                        ><i class="fa-brands fa-instagram"></i><span></span
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.8s"
                >
                  <div class="td-team-2-iteam p-relative mb-30">
                    <svg
                      class="bg-svg"
                      width="319"
                      height="370"
                      viewBox="0 0 319 370"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <mask id="path-1-inside-1_1600_1636" fill="white">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        />
                      </mask>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        fill="white"
                      />
                      <path
                        d="M7.12483 331.212L7.76858 330.447L7.12483 331.212ZM47.6501 365.305L47.0063 366.07L47.6501 365.305ZM267.725 4.72218L267.08 5.48608L267.725 4.72218ZM254.818 -1H23V1H254.818V-1ZM312.552 41.2837L268.37 3.95829L267.08 5.48608L311.262 42.8115L312.552 41.2837ZM320 347V57.3254H318V347H320ZM296 371C309.255 371 320 360.255 320 347H318C318 359.15 308.15 369 296 369V371ZM60.5252 371H296V369H60.5252V371ZM6.48107 331.977L47.0063 366.07L48.2938 364.539L7.76858 330.447L6.48107 331.977ZM-1 23V315.908H1V23H-1ZM23 -1C9.74517 -1 -1 9.74517 -1 23H1C1 10.8497 10.8497 1 23 1V-1ZM7.76858 330.447C3.47731 326.837 1 321.515 1 315.908H-1C-1 322.106 1.73808 327.987 6.48107 331.977L7.76858 330.447ZM311.262 42.8115C315.535 46.4216 318 51.7314 318 57.3254H320C320 51.1425 317.275 45.2738 312.552 41.2837L311.262 42.8115ZM60.5252 369C56.05 369 51.7184 367.42 48.2938 364.539L47.0063 366.07C50.7914 369.254 55.5789 371 60.5252 371V369ZM254.818 1C259.307 1 263.651 2.58925 267.08 5.48608L268.37 3.95829C264.581 0.756543 259.779 -1 254.818 -1V1Z"
                        fill="#AEAEAE"
                        mask="url(#path-1-inside-1_100_1636)"
                      />
                    </svg>
                    <img
                      class="team-gradiant-bg"
                      src="assets/img/team/team-2/shape.png"
                      alt=""
                    />
                    <div class="td-team-2-thumb fix mb-25">
                      <img
                        class="w-100"
                        src="assets/img/team/team-2/7.jpg"
                        alt=""
                      />
                    </div>
                    <div class="td-team-2-content ml-30">
                      <h2 class="td-team-2-title">
                        <a href="#">Event</a>
                      </h2>
                      <span class="td-team-2-position">Event</span>
                    </div>
                    <div class="td-team-2-social">
                      <a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"
                        ><i class="fa-brands fa-facebook"></i><span></span
                      ></a>
                      <a href="https://x.com/the_pace_mag">
                        <svg
                          width="19"
                          height="19"
                          viewBox="0 0 19 19"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M13.8678 1.42407H16.4381L10.8227 7.8421L17.4288 16.5756H12.2563L8.20503 11.2788L3.56944 16.5756H0.997567L7.00378 9.71078L0.666565 1.42407H5.97037L9.63238 6.26556L13.8678 1.42407ZM12.9657 15.0371H14.39L5.19648 2.88173H3.66812L12.9657 15.0371Z"
                            fill="currentColor"
                          />
                        </svg>
                        <span></span>
                      </a>
                      <a href="https://www.instagram.com/pace_setter_mag/"
                        ><i class="fa-brands fa-instagram"></i><span></span
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.9s"
                >
                  <div class="td-team-2-iteam p-relative mb-30">
                    <svg
                      class="bg-svg"
                      width="319"
                      height="370"
                      viewBox="0 0 319 370"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <mask id="path-1-inside-1_1700_1636" fill="white">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        />
                      </mask>
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 0H254.818C259.543 0 264.116 1.6729 267.725 4.72218L311.907 42.0476C316.405 45.8477 319 51.4369 319 57.3254V347C319 359.703 308.703 370 296 370H60.5252C55.8145 370 51.2549 368.337 47.6501 365.305L7.12483 331.212C2.60769 327.412 0 321.811 0 315.908V23C0 10.2975 10.2975 0 23 0Z"
                        fill="white"
                      />
                      <path
                        d="M7.12483 331.212L7.76858 330.447L7.12483 331.212ZM47.6501 365.305L47.0063 366.07L47.6501 365.305ZM267.725 4.72218L267.08 5.48608L267.725 4.72218ZM254.818 -1H23V1H254.818V-1ZM312.552 41.2837L268.37 3.95829L267.08 5.48608L311.262 42.8115L312.552 41.2837ZM320 347V57.3254H318V347H320ZM296 371C309.255 371 320 360.255 320 347H318C318 359.15 308.15 369 296 369V371ZM60.5252 371H296V369H60.5252V371ZM6.48107 331.977L47.0063 366.07L48.2938 364.539L7.76858 330.447L6.48107 331.977ZM-1 23V315.908H1V23H-1ZM23 -1C9.74517 -1 -1 9.74517 -1 23H1C1 10.8497 10.8497 1 23 1V-1ZM7.76858 330.447C3.47731 326.837 1 321.515 1 315.908H-1C-1 322.106 1.73808 327.987 6.48107 331.977L7.76858 330.447ZM311.262 42.8115C315.535 46.4216 318 51.7314 318 57.3254H320C320 51.1425 317.275 45.2738 312.552 41.2837L311.262 42.8115ZM60.5252 369C56.05 369 51.7184 367.42 48.2938 364.539L47.0063 366.07C50.7914 369.254 55.5789 371 60.5252 371V369ZM254.818 1C259.307 1 263.651 2.58925 267.08 5.48608L268.37 3.95829C264.581 0.756543 259.779 -1 254.818 -1V1Z"
                        fill="#AEAEAE"
                        mask="url(#path-1-inside-1_100_1636)"
                      />
                    </svg>
                    <img
                      class="team-gradiant-bg"
                      src="assets/img/team/team-2/shape.png"
                      alt=""
                    />
                    <div class="td-team-2-thumb fix mb-25">
                      <img
                        class="w-100"
                        src="assets/img/team/team-2/8.jpg"
                        alt=""
                      />
                    </div>
                    <div class="td-team-2-content ml-30">
                      <h2 class="td-team-2-title">
                        <a href="#">Event</a>
                      </h2>
                      <span class="td-team-2-position">Event</span>
                    </div>
                    <div class="td-team-2-social">
                      <a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"
                        ><i class="fa-brands fa-facebook"></i><span></span
                      ></a>
                      <a href="https://x.com/the_pace_mag">
                        <svg
                          width="19"
                          height="19"
                          viewBox="0 0 19 19"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M13.8678 1.42407H16.4381L10.8227 7.8421L17.4288 16.5756H12.2563L8.20503 11.2788L3.56944 16.5756H0.997567L7.00378 9.71078L0.666565 1.42407H5.97037L9.63238 6.26556L13.8678 1.42407ZM12.9657 15.0371H14.39L5.19648 2.88173H3.66812L12.9657 15.0371Z"
                            fill="currentColor"
                          />
                        </svg>
                        <span></span>
                      </a>
                      <a href="https://www.instagram.com/pace_setter_mag/"
                        ><i class="fa-brands fa-instagram"></i><span></span
                      ></a>
                    </div>
                  </div>
                </div>

                
              </div>
            </div>
          </div>
          <!-- td-team-area-end -->
    
          <!-- td-text-slider-area-start -->
          <div class="td-text-slider-area td-text-slider-spacing">
            <div class="container-fluid">
              <div class="row">
                <div class="swiper-container td-text-slider-active">
                  <div class="swiper-wrapper slide-transtion">
                    <div class="swiper-slide">
                      <div class="td-text-slider-item">
                        <h3 class="text">Pace Teenz Festival</h3>
                        <img src="assets/img/text/round.png" alt="round" />
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="td-text-slider-item">
                        <h3 class="text">29th November, 2025</h3>
                        <img src="assets/img/text/round.png" alt="round" />
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="td-text-slider-item">
                        <h3 class="text">Pace Setter INT</h3>
                        <img src="assets/img/text/round.png" alt="round" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- td-text-slider-area-end -->
    
          <!-- td-schedule-area-start -->
          <!-- <div
            class="td-schedule-2-area pt-140 pb-140 bg-position"
            data-background="assets/img/about/bg.jpg"
          >
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                  <div
                    class="text-center td-schedule-2-title-wrap mb-30 wow fadeInUp"
                    data-wow-duration="1.5s"
                    data-wow-delay="0.3s"
                  >
                    <span class="td-section-subtitle td-section-subtitle-2 mb-30"
                      >Event Schedule</span
                    >
                    <h2 class="mb-10 td-section-title">Our Events Schedule Plan</h2>
                    <p class="td-section-text">
                      Like previous year this year we are arranging world marketing
                      summit 2025. Its the gathering of all the big
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div
                  class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.2s"
                >
                  <div class="td-schedule-2-item mb-30">
                    <div class="td-schedule-2-thumb p-relative">
                      <img
                        class="w-100"
                        src="assets/img/schedule/schedule-2/1.jpg"
                        alt=""
                      />
                      <span class="td-schedule-2-date"
                        ><i class="flaticon-calendar"></i> March_23, 2018</span
                      >
                    </div>
                    <div class="td-schedule-2-content">
                      <h5 class="td-schedule-2-title mb-15">
                        <a href="#">Digital Marketing</a>
                      </h5>
                      <div class="td-schedule-2-destination mb-15">
                        <span
                          ><i class="flaticon-gps"></i>54 Street, Newyork City</span
                        >
                        <span><i class="flaticon-account"></i>Esther Howard</span>
                        <span><i class="flaticon-time"></i>9.00am - 10.00 am</span>
                      </div>
                      <a class="td-btn-square" href="events-details.html"
                        >Details</a
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.3s"
                >
                  <div class="td-schedule-2-item mb-30">
                    <div class="td-schedule-2-thumb p-relative">
                      <img
                        class="w-100"
                        src="assets/img/schedule/schedule-2/2.jpg"
                        alt=""
                      />
                      <span class="td-schedule-2-date"
                        ><i class="flaticon-calendar"></i> March_23, 2018</span
                      >
                    </div>
                    <div class="td-schedule-2-content">
                      <h5 class="td-schedule-2-title mb-15">
                        <a href="#">Cultures of Creativity</a>
                      </h5>
                      <div class="td-schedule-2-destination mb-15">
                        <span
                          ><i class="flaticon-gps"></i>54 Street, Newyork City</span
                        >
                        <span><i class="flaticon-account"></i>Esther Howard</span>
                        <span><i class="flaticon-time"></i>9.00am - 10.00 am</span>
                      </div>
                      <a class="td-btn-square" href="events-details.html"
                        >Details</a
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.4s"
                >
                  <div class="td-schedule-2-item mb-30">
                    <div class="td-schedule-2-thumb p-relative">
                      <img
                        class="w-100"
                        src="assets/img/schedule/schedule-2/3.jpg"
                        alt=""
                      />
                      <span class="td-schedule-2-date"
                        ><i class="flaticon-calendar"></i> March_23, 2018</span
                      >
                    </div>
                    <div class="td-schedule-2-content">
                      <h5 class="td-schedule-2-title mb-15">
                        <a href="#">Marketing Matters!</a>
                      </h5>
                      <div class="td-schedule-2-destination mb-15">
                        <span
                          ><i class="flaticon-gps"></i>54 Street, Newyork City</span
                        >
                        <span><i class="flaticon-account"></i>Esther Howard</span>
                        <span><i class="flaticon-time"></i>9.00am - 10.00 am</span>
                      </div>
                      <a class="td-btn-square" href="events-details.html"
                        >Details</a
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.5s"
                >
                  <div class="td-schedule-2-item mb-30">
                    <div class="td-schedule-2-thumb p-relative">
                      <img
                        class="w-100"
                        src="assets/img/schedule/schedule-2/4.jpg"
                        alt=""
                      />
                      <span class="td-schedule-2-date"
                        ><i class="flaticon-calendar"></i> March_23, 2018</span
                      >
                    </div>
                    <div class="td-schedule-2-content">
                      <h5 class="td-schedule-2-title mb-15">
                        <a href="#">UI/UX Design Event</a>
                      </h5>
                      <div class="td-schedule-2-destination mb-15">
                        <span
                          ><i class="flaticon-gps"></i>54 Street, Newyork City</span
                        >
                        <span><i class="flaticon-account"></i>Esther Howard</span>
                        <span><i class="flaticon-time"></i>9.00am - 10.00 am</span>
                      </div>
                      <a class="td-btn-square" href="events-details.html"
                        >Details</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="mt-40 text-center">
                    <a class="td-btn-square" href="events.html">See All Events</a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- td-schedule-area-end -->
          <!-- td-banner-area-start -->
    <div
    class="td-banner-area td-banner-spacing-2 bg-position jarallax"
    data-background="assets/img/logo/logo.png"
    >
    <div class="td-banner-overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-8">
          <div
            class="td-banner-title-wrap td-banner-title-wrap-2 wow fadeInLeft"
            data-wow-duration="1.5s"
            data-wow-delay="0.3s"
          >
            <span class="mb-20 td-section-subtitle td-section-subtitle-2"
              >PACE EXPERIENCE</span
            >
            <h2 class="td-section-title mb-15">
              The best teenFest experience 2025
            </h2>
            <a class="td-btn-square" href="{{ route('ticket', ['event' => $highlightedEvent->id ?? 1, 'amount' => $highlightedEvent->tickets['early_bird'] ?? 0]) }}">Buy Tickets Now</a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-4">
          <div class="td-banner-2-video-wrap ml-200">
            <a
              class="td-video-play popup-video td-pulse-border"
              href="https://www.youtube.com/watch?v=JYVn0a-XOdA"
            >
              <span class="p-relative z-index-11">
                <svg
                  width="20"
                  height="24"
                  viewBox="0 0 20 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.8571 12L0.571429 23.1346L0.57143 0.865352L19.8571 12Z"
                    fill="currentColor"
                  />
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- td-banner-area-end -->
          
          
    
          <!-- td-pricing-area-start -->
          <div class="td-pricing-area grey-bg pt-140 pb-110 fix">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                  <div
                    class="mb-40 text-center td-schedule-2-title-wrap wow fadeInUp"
                    data-wow-duration="1.5s"
                    data-wow-delay="0.3s"
                  >
                    <span class="td-section-subtitle td-section-subtitle-2 mb-30"
                      >Get your tickets today!</span
                    >
                    <h2 class="mb-10 td-section-title">
                      Explore flexible pricing plans
                    </h2>
                    
                  </div>
                </div>
              </div>
              <div class="row gx-30">
                <div
  class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInLeft"
  data-wow-duration="1.5s"
  data-wow-delay="0.3s"
>
  <div
    class="td-pricing-2-item bg-position"
    data-background="assets/img/pricing/bg.png"
  >
    <div class="td-pricing-2-price mb-30">
      <span class="mb-5 subtitle">Early Bird</span>
      <span class="price">Ksh.{{ $highlightedEvent->tickets['early_bird'] ?? 'N/A' }}</span>
    </div>
    <div class="td-pricing-2-feature mb-35">
      <ul>
        <li>
          <span>
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
              d="M20 10.1771V11.0051C19.9989 12.9459 19.3704 14.8344 18.2084 16.3888C17.0463 17.9432 15.413 19.0804 13.5518 19.6307C11.6907 20.1809 9.70153 20.1149 7.88102 19.4423C6.06051 18.7697 4.50619 17.5266 3.44986 15.8985C2.39354 14.2704 1.89181 12.3444 2.01951 10.4078C2.14721 8.47126 2.89749 6.62784 4.15845 5.15252C5.41942 3.67719 7.1235 2.649 9.01657 2.22128C10.9096 1.79357 12.8902 1.98925 14.663 2.77915M20 3.80515L11 12.8141L8.3 10.1141"
              stroke="currentColor"
              stroke-width="2.2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          </span>
          <span class="">Open</span>
        </li>
        <li>
          <span>
            <svg
              width="22"
              height="22"
              viewBox="0 0 22 22"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M20 10.1771V11.0051C19.9989 12.9459 19.3704 14.8344 18.2084 16.3888C17.0463 17.9432 15.413 19.0804 13.5518 19.6307C11.6907 20.1809 9.70153 20.1149 7.88102 19.4423C6.06051 18.7697 4.50619 17.5266 3.44986 15.8985C2.39354 14.2704 1.89181 12.3444 2.01951 10.4078C2.14721 8.47126 2.89749 6.62784 4.15845 5.15252C5.41942 3.67719 7.1235 2.649 9.01657 2.22128C10.9096 1.79357 12.8902 1.98925 14.663 2.77915M20 3.80515L11 12.8141L8.3 10.1141"
                stroke="currentColor"
                stroke-width="2.2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </span>
          <span class="">Ends in July, 2025</span>
        </li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <a
  class="td-btn-square"
 href="{{ route('ticket', ['event' => $highlightedEvent->id ?? 1, 'amount' => $highlightedEvent->tickets['early_bird'] ?? 0]) }}"

  title="Open Now"
>
  Purchase Tickets
</a>

  </div>
</div>

                <div
                  class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.3s"
                >
                  <div
                    class="td-pricing-2-item bg-position"
                    data-background="assets/img/pricing/bg.png"
                  >
                    <div class="text-center td-pricing-2-price mb-30">
                      <span class="mb-5 subtitle">Advance</span>
                      <span class="price">Ksh.{{ $highlightedEvent->tickets['advance'] ?? 'N/A' }}</span>
                    </div>
                    <div class="td-pricing-2-feature mb-35">
                      <ul>
                        <li>
                          <span>
                            <svg
                              width="22"
                              height="22"
                              viewBox="0 0 22 22"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M20 10.1771V11.0051C19.9989 12.9459 19.3704 14.8344 18.2084 16.3888C17.0463 17.9432 15.413 19.0804 13.5518 19.6307C11.6907 20.1809 9.70153 20.1149 7.88102 19.4423C6.06051 18.7697 4.50619 17.5266 3.44986 15.8985C2.39354 14.2704 1.89181 12.3444 2.01951 10.4078C2.14721 8.47126 2.89749 6.62784 4.15845 5.15252C5.41942 3.67719 7.1235 2.649 9.01657 2.22128C10.9096 1.79357 12.8902 1.98925 14.663 2.77915M20 3.80515L11 12.8141L8.3 10.1141"
                                stroke="currentColor"
                                stroke-width="2.2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                          <span>Opens August, 2025</span>
                        </li>
                        <li>
                          <span>
                            <svg
                              width="22"
                              height="22"
                              viewBox="0 0 22 22"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M20 10.1771V11.0051C19.9989 12.9459 19.3704 14.8344 18.2084 16.3888C17.0463 17.9432 15.413 19.0804 13.5518 19.6307C11.6907 20.1809 9.70153 20.1149 7.88102 19.4423C6.06051 18.7697 4.50619 17.5266 3.44986 15.8985C2.39354 14.2704 1.89181 12.3444 2.01951 10.4078C2.14721 8.47126 2.89749 6.62784 4.15845 5.15252C5.41942 3.67719 7.1235 2.649 9.01657 2.22128C10.9096 1.79357 12.8902 1.98925 14.663 2.77915M20 3.80515L11 12.8141L8.3 10.1141"
                                stroke="currentColor"
                                stroke-width="2.2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                          <span>Ends October, 2025</span>
                        </li>
                        <li></li>
                        <li></li>
                      </ul>
                    </div>
                    <a class="td-btn-square not" href="Ticket.html" onclick="return false;" style="pointer-events: none; color: rgb(197, 190, 190); text-decoration: none; cursor: no-drop; background-color: #f7f1f1" title="closed">
                      Purchase Tickets
                    </a>
                    
                  </div>
                </div>
                <div
                  class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInRight"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.3s"
                >
                  <div
                    class="td-pricing-2-item bg-position"
                    data-background="assets/img/pricing/bg.png"
                  >
                    <div class="text-center td-pricing-2-price mb-30">
                      <span class="mb-5 subtitle">Gate</span>
                      <span class="price">Ksh.{{ $highlightedEvent->tickets['gate'] ?? 'N/A' }}</span>
                    </div>
                    <div class="td-pricing-2-feature mb-35">
                      <ul>
                        <li>
                          <span>
                            <svg
                              width="22"
                              height="22"
                              viewBox="0 0 22 22"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M20 10.1771V11.0051C19.9989 12.9459 19.3704 14.8344 18.2084 16.3888C17.0463 17.9432 15.413 19.0804 13.5518 19.6307C11.6907 20.1809 9.70153 20.1149 7.88102 19.4423C6.06051 18.7697 4.50619 17.5266 3.44986 15.8985C2.39354 14.2704 1.89181 12.3444 2.01951 10.4078C2.14721 8.47126 2.89749 6.62784 4.15845 5.15252C5.41942 3.67719 7.1235 2.649 9.01657 2.22128C10.9096 1.79357 12.8902 1.98925 14.663 2.77915M20 3.80515L11 12.8141L8.3 10.1141"
                                stroke="currentColor"
                                stroke-width="2.2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                          <span>On 20th, October</span>
                        </li>
                        <li>
                          <span>
                            <svg
                              width="22"
                              height="22"
                              viewBox="0 0 22 22"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M20 10.1771V11.0051C19.9989 12.9459 19.3704 14.8344 18.2084 16.3888C17.0463 17.9432 15.413 19.0804 13.5518 19.6307C11.6907 20.1809 9.70153 20.1149 7.88102 19.4423C6.06051 18.7697 4.50619 17.5266 3.44986 15.8985C2.39354 14.2704 1.89181 12.3444 2.01951 10.4078C2.14721 8.47126 2.89749 6.62784 4.15845 5.15252C5.41942 3.67719 7.1235 2.649 9.01657 2.22128C10.9096 1.79357 12.8902 1.98925 14.663 2.77915M20 3.80515L11 12.8141L8.3 10.1141"
                                stroke="currentColor"
                                stroke-width="2.2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                          <span>Gate opens at 3:00 p.m</span>
                        </li>
                        <li></li>
                        <li></li>
                      </ul>
                    </div>
                    <a class="td-btn-square not" href="Ticket.html" onclick="return false;" style="pointer-events: none; color: rgb(197, 190, 190); text-decoration: none; cursor: no-drop; background-color: #f7f1f1" title="closed">
                      Purchase Tickets
                    </a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- td-pricing-area-end -->
    
          <!-- td-brands-area-start -->
          <div class="td-brands-area td-brands-2-wrap pt-140 pb-115">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                  <div
                    class="text-center td-schedule-2-title-wrap mb-30 wow fadeInUp"
                    data-wow-duration="1.5s"
                    data-wow-delay="0.3s"
                  >
                    <span class="td-section-subtitle td-section-subtitle-2 mb-30"
                      >Sponsors</span
                    >
                    <h2 class="mb-10 td-section-title">
                      Our Sponsors & Partners 2025
                    </h2>
                    
                  </div>
                </div>
              </div>
              <div class="row">
                <div
                  class="col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.2s"
                >
                  <div class="td-brands-item mb-25">
                    <a href="#"
                      ><img src="assets/img/brands/brands.png" alt=""
                    /></a>
                  </div>
                </div>
                <div
                  class="col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.3s"
                >
                  <div class="td-brands-item mb-25">
                    <a href="#"
                      ><img src="assets/img/brands/brands-2.png" alt=""
                    /></a>
                  </div>
                </div>
                <div
                  class="col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.4s"
                >
                  <div class="td-brands-item mb-25">
                    <a href="#"
                      ><img src="assets/img/brands/brands-3.png" alt=""
                    /></a>
                  </div>
                </div>
                <div
                  class="col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.5s"
                >
                  <div class="td-brands-item mb-25">
                    <a href="#"
                      ><img src="assets/img/brands/brands-4.png" alt=""
                    /></a>
                  </div>
                </div>
                <div
                  class="col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.6s"
                >
                  <div class="td-brands-item mb-25">
                    <a href="#"
                      ><img src="assets/img/brands/brands-5.png" alt=""
                    /></a>
                  </div>
                </div>
                <div
                  class="col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.7s"
                >
                  <div class="td-brands-item mb-25">
                    <a href="#"
                      ><img src="assets/img/brands/brands-6.png" alt=""
                    /></a>
                  </div>
                </div>
                <div
                  class="col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.8s"
                >
                  <div class="td-brands-item mb-25">
                    <a href="#"
                      ><img src="assets/img/brands/brands-7.png" alt=""
                    /></a>
                  </div>
                </div>
                <div
                  class="col-xl-3 col-lg-4 col-md-6 col-6 wow fadeInUp"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.9s"
                >
                  <div class="td-brands-item mb-25">
                    <a href="#"
                      ><img src="assets/img/brands/brands-8.png" alt=""
                    /></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- td-brands-area-end -->
    
          <!-- td-location-area-start -->
          <div
            class="td-location-area bg-position pt-140 pb-90"
            data-background="assets/img/location/bg.jpg"
          >
            <div class="container">
              <div class="row">
                <div class="col-xl-5 col-lg-8">
                  <div
                    class="td-location-2-wrap td-brands-title-wrap mb-45 wow fadeInLeft"
                    data-wow-duration="1.5s"
                    data-wow-delay="0.3s"
                  >
                    <span class="mb-20 td-section-subtitle td-section-subtitle-2"
                      >Event Venue</span
                    >
                    <h2 class="td-section-title">
                      Get direction to the event venue
                    </h2>
                    
                    <div class="flex-wrap td-location-2-addres d-flex">
                      <div class="mb-15">
                        <span class="mb-10 d-inline-block">Venue</span>
                        <p>
                          KICC<br />
                          Grounds
                        </p>
                      </div>
                      <div class="td-border d-none d-sm-block"></div>
                      <div class="mb-15">
                        <span class="mb-10 d-inline-block">KICC </span>
                        <a
                          href="https://www.google.com/maps"
                          target="_blank"
                          class="d-block"
                          >P.O Box<br />
                          30746-01000</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                  <div class="td-location-2-map h-100 ml-90 pb-50">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d837.4941366940185!2d36.82246731212413!3d-1.2886165750774095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11747e756f41%3A0x146973898c119b47!2sKenyatta%20International%20Convention%20Centre!5e1!3m2!1sen!2ske!4v1744734508621!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- td-location-area-end -->
    
          <!-- td-blog-area-start -->
          <!--blog section on home page*/-->
          <!-- td-blog-area-end -->
    
          <!-- td-cta-area-start -->
    
          <!-- td-cta-area-end -->
        </main>
        <!-- main-area-end -->
    
        <!-- footer-area-start -->
        <footer>
          <div
            class="td-footer-area td-footer-2-spacing bg-position"
            data-background="assets/img/footer/bg.jpg"
          >
            <div class="container">
              <div class="row mb-15">
                <div class="col-xl-3 col-lg-3 col-md-5">
                  <div class="mb-40 td-footer-widget">
                    <div class="mb-20 td-footer-logo">
                      <a href="#"
                        ><img src="assets/img/logo/logo.png" alt="logo"
                      /></a>
                    </div>
                    <p class="mb-10 text">
                      Nairobi,Kenya
                    </p>
                    <a
                      class="mb-10 number d-inline-block"
                      href="tel:+254726846918"
                      >( 254)726-846 918 or (254) 707-000 360</a
                    >
                    <a class="email" href="mailto:Thepacesettertalentshow@gmail.com">Thepacesettertalentshow@gmail.com</a>
                  </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-7">
                  <div class="mb-40 td-footer-widget space ml-90">
                    <h3 class="mb-20 td-footer-title">Quick links</h3>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="td-footer-links">
                          <ul>
                            <li><a href="#">About this Event</a></li>
                            <li><a href="#">Venue</a></li>
                            <li><a href="#">Speakers</a></li>
                            <li><a href="#">Agenda</a></li>
                            <li><a href="#">Sponsors</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="td-footer-links">
                          <ul>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Get Tickets</a></li>
                            <li><a href="#">Benefits</a></li>
                            <li><a href="#">Contact Us</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="td-footer-2-widget space ml-90 mb-40">
                  <h3 class="td-footer-title mb-25"></h3>
                  <div class="row gx-10">
                    <a aria-label="Chat on WhatsApp" 
                       href="https://wa.me/254726846918?text=Hello%20Pace%20Setter,%20I%20want%20to%20book%20an%20event" 
                       target="_blank">
                      <img alt="Chat on WhatsApp" src="{{ asset('assets/img/whatsapp/WhatsAppButtonGreenLarge.png') }}" />
                    </a>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="pt-40 td-footer-bottom pb-15">
                    <div class="row align-items-center">
                      <div class="col-md-9">
                        <div class="td-footer-bottom-copyright mb-30">
                          <p>
                            Copyright © <span id="current-year"></span> pacesetter.co.ke All rights reserved.
                          </p>
                          
                          
                          
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="text-right td-footer-bottom-social mb-30">
                          
                          <span
                            ><a href="https://www.instagram.com/pace_setter_mag/"><i class="fa-brands fa-instagram"></i></a
                          ></span>
                          <span>
                            <a href="https://x.com/the_pace_mag">
                              <svg
                                width="21"
                                height="18"
                                viewBox="0 0 21 18"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M16.3783 0.111328H19.3942L12.8054 7.64181L20.5565 17.8891H14.4875L9.73399 11.6742L4.2949 17.8891H1.27723L8.32453 9.83441L0.888855 0.111328H7.11199L11.4087 5.79201L16.3783 0.111328ZM15.3199 16.084H16.991L6.20396 1.82164H4.41068L15.3199 16.084Z"
                                  fill="currentColor"
                                />
                              </svg>
                            </a>
                          </span>
                          <span
                            ><a href="https://wa.me/254726846918?text=Hello%20Pace%20Setter,%20I%20want%20to%20book%20an%20event"><i class="fa-brands fa-whatsapp"></i></a
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- footer-area-end -->
    
        <!-- JS here -->
        <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-appear.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/Jarallax.js') }}"></script>
        <script src="{{ asset('assets/js/nice-select.js') }}"></script>
        <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script>
          // Get the current year
          const year = new Date().getFullYear();
          // Insert the year into the span with id "current-year"
          document.getElementById("current-year").textContent = year;
        </script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const endDate = new Date("{{ \Carbon\Carbon::parse($highlightedEvent->date ?? now())->format('Y-m-d\TH:i:s') }}").getTime();

    const daysEl = document.querySelector('.days span');
    const hoursEl = document.querySelector('.hours span');
    const minutesEl = document.querySelector('.minutes span');
    const secondsEl = document.querySelector('.seconds span');

    const timer = setInterval(function () {
      const now = new Date().getTime();
      const distance = endDate - now;

      if (distance < 0) {
        clearInterval(timer);
        document.getElementById("timer").innerHTML = "<li>Event Started</li>";
        return;
      }

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      daysEl.textContent = days;
      hoursEl.textContent = hours;
      minutesEl.textContent = minutes;
      secondsEl.textContent = seconds;
    }, 1000);
  });
</script>

      </body>
</html>
