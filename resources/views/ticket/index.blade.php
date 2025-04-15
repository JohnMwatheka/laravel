<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PACE</title>
    <meta name="description" content="PACE Events" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{ asset('assets/img/logo/logo.png') }}"
    />
    <!-- Place favicon.ico in the root directory -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <style>
        .contact-form-container {
          background: linear-gradient(to right, rgb(252, 249, 249), rgb(243, 241, 241), white);
          box-shadow: -5px 5px 15px rgba(1, 6, 36, 0.5);
          border-radius: 8px;
          padding: 30px;
        }
      
        .form-input {
          box-shadow: 0 4px 10px rgba(248, 247, 247, 0.979);
          border: none;
          border-radius: 5px;
          padding: 12px;
        }
      
        .form-btn {
          background-color: #6c04f5;
          color: white;
          border: none;
          border-radius: 5px;
          padding: 12px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
          justify-content: center;
          align-self: center;
        }
      
        .form-btn:hover {
          background-color: #db2777;
          color: white;
        }
            .td-breadcrumb-area {
              position: relative;
              background: url("{{ asset('assets/img/logo/logo.png') }}") center center / cover no-repeat;
            }
            .td-breadcrumb-area::before {
              content: "";
              position: absolute;
              inset: 0;
              background: rgba(0, 0, 0, 0.5); /* Adjust opacity as needed */
            }
            .td-breadcrumb-area .container {
              position: relative;
              z-index: 1;
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
                {{-- <form action="#"> --}}
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
                {{-- </form> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="search-popup-overlay"></div>
    <!-- header-search-end -->

    <!-- cart mini area start -->

    <div class="body-overlay"></div>
    <!-- cart mini area end -->

    <!-- header-area -->
    <header class="td-header-height">
      <div class="td-header__area z-index-999 td-transparent">
        <div class="td-header-3-top d-none d-lg-block">
          <div class="container-fluid container-1680">
            <div class="row">
              <div class="col-lg-6">
                <div class="td-header-3-top-info">
                  <span
                    ><a href="#"
                      ><i class="flaticon-gps"></i>Nairobi, Kenya</a
                    ></span
                  >
                  <span class="dvdr">/</span>
                  <span
                    ><a href="tel:+254726846918"
                      ><i class="flaticon-phone"></i>+254 726-846 918</a
                    ></span
                  >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="d-none d-lg-block">
                  <div
                    class="td-header-3-top-social d-flex align-items-center justify-content-end"
                  >
                    <span class="td-email"
                      ><a href="mailto:thepacesettertalentshow@gmail.com"
                        ><i class="flaticon-mail"></i>Thepacesettertalentshow@gmail.com</a
                      ></span
                    >
                    <span class="dvdr">/</span>
                    <span
                      ><a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"><i class="fa-brands fa-facebook"></i></a
                    ></span>
                    <span>
                      <a href="#">
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
                      ><a href="https://www.facebook.com/p/The-Pace-setter-Mag-61550425191042/"><i class="fa-brands fa-instagram"></i></a
                    ></span>
                    <span
                      ><a href="https://wa.me/254726846918?text=Hello%20Pace%20Setter,%20I%20want%20to%20book%20an%20event"><i class="fa-brands fa-whatsapp"></i></a
                    ></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="header-sticky" class="header-mobile-spacing">
          <div class="container-fluid container-1680">
            <div class="row align-items-center">
              <div class="col-xxl-9 col-xl-9 col-6">
                <div
                  class="tdmenu__wrap d-flex align-items-center justify-content-between"
                >
                  <div class="logo">
                    <a class="logo-1 logo-sticky-none" href="/"
                      ><img
                        data-width="150"
                        src="{{ asset('assets/img/logo/logo.png') }}"
                        alt="Logo"
                    /></a>
                    <a class="logo-2 d-none" href="/"
                      ><img
                        data-width="150"
                        src="{{ asset('assets/img/logo/logo.png') }}"
                        alt="Logo"
                    /></a>
                  </div>
                  <nav
                    class="tdmenu__nav tdmenu-3 ml-50 mr-40 d-none d-xl-flex"
                  >
                    <div class="tdmenu__navbar-wrap tdmenu__main-menu">
                      <ul class="navigation">
                        <li class="menu-item-has-children">
                          <a href="/">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                          <a href="#">Events</a>
                        </li>
                        <li class="menu-item-has-children">
                          <a href="#">Speakers</a>
                        </li>

                        <li class="menu-item-has-children">
                          <a href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="active">
                          <a href="{{ route('ticket', ['event' => $highlightedEvent['id'], 'amount' => $highlightedEvent['tickets']['early_bird'] ?? 0]) }}">Buy Tickect</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-3 col-6">
                <div
                  class="td-menu-right-action td-menu-right-action-3 d-flex align-items-center justify-content-end"
                >
                  <div class="td-header-menu-bar lh-1 p-relative ml-20">
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
      </div>

      <!-- Mobile Menu  -->
      <div class="tdmobile__menu">
        <nav class="tdmobile__menu-box">
          <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
          <div class="nav-logo">
            <a href="/"
              ><img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo"
            /></a>
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
          <a href="/"
            ><img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo"
          /></a>
        </div>
        <div class="offCanvas__side-info mb-30">
          <div class="contact-list mb-30">
            <h4>Office Address</h4>
            <a href="https://www.google.com/maps" target="_blank"
              >Nairobi <br />
              Kenya</a
            >
          </div>
          <div class="contact-list mb-30">
            <h4>Phone Number</h4>
            <a href="tel:(090)87658654385">+0989 7876 9865 9</a>
            <a href="tel:(090)87658654385">+(090) 8765 86543 85</a>
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
    <main>
      <!-- td-breadcrumb-area-start -->
      
      
      <div class="td-breadcrumb-area td-breadcrumb-spacing bg-position">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="td-breadcrumb-title-wrap">
                <h2
                  class="td-breadcrumb-title mb-10 wow td-animetion-left"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.3s"
                >
                  Buy ticket
                </h2>
                <div
                  class="td-breadcrumb-list wow td-animetion-right"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.3s"
                >
                  <ul>
                    <li><a href="/">Home</a></li>
                    <li>
                      <i class="fa-sharp fa-solid fa-angle-right fa-fw"></i>
                    </li>
                    <li class="pages">Buy ticket</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- td-breadcrumb-area-end -->


      
      
 <!-- td-contact-form-area-start -->
<div class="container d-flex justify-content-center mt-3">
  <div class="contact-form-container col-lg-8 col-xl-6 col-sm-12">
    <h3 class="text-center mb-4 text-secondary">Buy Ticket</h3>
    <form id="contact-form" action="{{ route('buy-ticket') }}" method="POST">
      @csrf
      <div class="row mb-3">
        <div class="col">
          <input type="text" class="form-control form-input" name="firstName" placeholder="First Name" required pattern="^[A-Za-z]+$" title="Please enter a valid first name (letters only).">
        </div>
        <div class="col">
          <input type="text" class="form-control form-input" name="lastName" placeholder="Last Name" required pattern="^[A-Za-z]+$" title="Please enter a valid last name (letters only).">
        </div>
      </div>
      <div class="mb-3">
        <input type="text" class="form-control form-input" name="phone" placeholder="Phone Number" required pattern="^(\+2547\d{8}|07\d{8})$" title="Please enter a valid phone number starting with +2547 or 07 followed by 8 digits.">
      </div>
      <div class="mb-3">
        <input type="email" class="form-control form-input" name="email" placeholder="Email" required pattern="^[^@\s]+@[^@\s]+\.[^@\s]+$" title="Please enter a valid email address.">
      </div>
      
      <div class="mb-3">
        <input type="text" class="form-control form-input" name="school" placeholder="School" required title="Please enter your school name.">
      </div>
      <div class="mb-3 position-relative">
        <select class="form-control form-input" name="ticket_quantity" required title="Please select the number of tickets.">
          <option value="" disabled selected>Select Number of Tickets</option>
          @for ($i = 1; $i <= 10; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
        </select>
        <span class="position-absolute" style="top: 50%; right: 45px; transform: translateY(-50%); pointer-events: none; font-size: 2.4rem;">
          &#9662;
        </span>
      </div>
      <!-- Hidden Inputs -->
      <input type="hidden" name="ticket_amount" value="{{ $amount }}">
      <input type="hidden" name="event_id" value="{{ $event->id }}">

      <button type="submit" class="form-btn btn-sm col-sm-12 col-lg-12 col-xl-12 justify-between">Buy Ticket</button>
    </form>

    <div id="response-message" class="alert mt-3 text-center" style="display: none;"></div>
  </div>
</div>
<!-- td-contact-form-area-end -->
     
      
    </main>
    <!-- main-area-end -->

    <!-- footer-area-start -->
    <footer>
        <div
          class="td-footer-area td-footer-2-spacing bg-position bg-dark"
          data-background="assets/img/footer/bg.jpg"
        >
          <div class="container">
            <div class="row mb-15">
              <div class="col-xl-3 col-lg-3 col-md-5">
                <div class="mb-40 td-footer-widget">
                  <div class="mb-20 td-footer-logo">
                    <a href="/"
                      ><img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo"
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
                          <li><a href="{{ route('ticket', ['event' => $highlightedEvent['id'], 'amount' => $highlightedEvent['tickets']['early_bird'] ?? 0]) }}">Get Tickets</a></li>
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
      document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contact-form');
        const responseMessage = document.getElementById('response-message');
    
        form.addEventListener('submit', function(e) {
          e.preventDefault();
    
          // Validate form fields
          if (!form.checkValidity()) {
            form.reportValidity();
            return;
          }
    
          // Show loading state
          const submitButton = form.querySelector('button[type="submit"]');
          const originalButtonText = submitButton.innerHTML;
          submitButton.innerHTML = 'Processing...';
          submitButton.disabled = true;
    
          // Get form data
          const formData = new FormData(form);
    
          // Send AJAX request
          fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
          })
          .then(response => response.json())
          .then(data => {
            // Reset button
            submitButton.innerHTML = originalButtonText;
            submitButton.disabled = false;
    
            // Show response message
            responseMessage.style.display = 'block';
            responseMessage.className = 'alert mt-3 text-center';
    
            if (data.status === 'success') {
              responseMessage.classList.add('alert-success');
              responseMessage.textContent = data.message;
              form.reset();
            } else {
              responseMessage.classList.add('alert-danger');
              responseMessage.textContent = data.message || 'An error occurred. Please try again.';
            }
          })
          .catch(error => {
            // Reset button
            submitButton.innerHTML = originalButtonText;
            submitButton.disabled = false;
    
            // Show error message
            responseMessage.style.display = 'block';
            responseMessage.className = 'alert alert-danger mt-3 text-center';
            responseMessage.textContent = 'An error occurred. Please try again.';
            console.error('Error:', error);
          });
        });
      });
    </script>
    
  </body>
</html>
