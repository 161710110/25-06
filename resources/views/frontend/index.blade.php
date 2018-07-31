<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{ asset('frontend/img/fav.png') }}">
  <!-- Author Meta -->
  <meta name="author" content="CodePixar">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Absensi</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('frontend/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
  </head>
  <body>
    <div class="main-wrapper-first">
      <header>
        <div class="container">
          <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
              <div class="logo">
                <a href="index.html"><img src="{{ asset('frontend/img/logo.png') }}" alt=""></a>
              </div>
              <div class="main-menubar d-flex align-items-center">
                <nav class="hide">
                  @auth
                                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            @else
                              <a href="{{ route('login') }}">Login</a>
                            @endauth
                </nav>
                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="banner-area">
        <div class="container">
          <div class="row justify-content-center height align-items-center">
            
                <section class="service-area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="section-title">
                <h3 class="text-white"></h3>
              </div>
            </div>
          </div>
          <div class="card">
          <div class="card-body">
              <h4 class="card-title">Rekap kelas </h4>
              <div class="default-select">
        <form action="{{ route('isirekap') }}" method="post">
        {{csrf_field()}}
        <label class="control-label">Dari Tanggal</label>
        <input type="date" name="a" required="">
        <label class="control-label">Sampai Tanggal</label>
        <input type="date" name="b" required="">
              <select name="c" required="">
                @foreach($kelas as $aa)
                <option value="{{$aa->id}}">{{$aa->nama}}
                </option>
                @endforeach
              </select>
        <input type="submit" name="submit" class="btn btn-light" value="Submit">
        </form> 
        </div>
      </div>
        </div>
      </section>
            
          </div>
        </div>
      </div>

      <!-- Start Feature Area -->
      
      <!-- End Feature Area -->
      <!-- Start Service Area -->
      <!-- End Service Area -->
      <!-- Start Amazing Works Area -->
    </div>
    
    <div class="main-wrapper">
      <!-- End Amazing Works Area -->
      
      <!-- Start Subscription Area -->
      <section class="subscription-area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="section-title text-center">
                <h3>Subscribe for our Newsletter</h3>
                <span class="text-uppercase">Re-imagining the way</span>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div id="mc_embed_signup">
                <form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative">
                  <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
                  <div style="position: absolute; left: -5000px;">
                    <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
                  </div>
                  <button class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></button>
                  <div class="info"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Subscription Area -->
      <!-- Start Footer Widget Area -->
      <section class="footer-widget-area">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="single-widget d-flex flex-wrap justify-content-between">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="lnr lnr-pushpin"></span>
                </div>
                <div class="desc">
                  <h6 class="title text-uppercase">Address</h6>
                  <p>56/8, panthapath, west <br> dhanmondi, kalabagan, <br>Dhaka - 1205</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="single-widget d-flex flex-wrap justify-content-between">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="lnr lnr-earth"></span>
                </div>
                <div class="desc">
                  <h6 class="title text-uppercase">Email Address</h6>
                  <div class="contact">
                    <a href="mailto:info@dataarc.com">info@dataarc.com</a> <br>
                    <a href="mailto:support@dataarc.com">support@dataarc.com</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="single-widget d-flex flex-wrap justify-content-between">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="lnr lnr-phone"></span>
                </div>
                <div class="desc">
                  <h6 class="title text-uppercase">Phone Number</h6>
                  <div class="contact">
                    <a href="tel:1545">012 4562 982 3612</a> <br>
                    <a href="tel:54512">012 6321 956 4587</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Footer Widget Area -->
      <!-- Start footer Area -->
      <footer>
        <div class="container">
          <div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
            <div class="logo">
              <img src="img/logo.png" alt="">
            </div>
            <div class="copy-right-text">Copyright &copy; 2017  |  All rights reserved to Dinomuz inc. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></div>
            <div class="footer-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </footer>
      <!-- End footer Area -->
    </div>




    <script src="{{ asset('frontend/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
  </body>
</html>
