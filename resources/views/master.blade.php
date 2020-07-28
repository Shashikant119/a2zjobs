<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="{{url('/')}}/ftco-32x32.png">
    
    <link rel="stylesheet" href="{{url('/')}}/css/custom-bs.css">
    <link rel="stylesheet" href="{{url('/')}}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{url('/')}}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{url('/')}}/fonts/line-icons/style.css">
    <link rel="stylesheet" href="{{url('/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/animate.min.css">

    <!-- MAIN CSS --> 
    <link rel="stylesheet" href="{{url('/')}}/css/quill.snow.css">

    <link rel="stylesheet" href="{{url('/')}}/css/style.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    
<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="{{url('/')}}/">JobBoard</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="{{url('/')}}/" class="nav-link active">Home</a></li>
              <li><a href="{{url('/')}}/About">About</a></li>
              <li><a href="{{url('/')}}/Gallery">Gallery</a></li>
               <li><a href="{{url('/')}}/Online-Exam">Online Exam</a></li>
              <li class="has-children">
                <a>Pages</a>
                <ul class="dropdown">
                  <li><a href="{{url('/')}}/Services">Services</a></li>
                  <li><a href="{{url('/')}}/Portfolio">Portfolio</a></li>
                  <li><a href="{{url('/')}}/Web-Design">Web Design</a></li>
                  <li><a href="{{url('/')}}/resize">Latest News</a></li> 
                </ul>
              </li>
              <li><a href="{{url('/')}}/Blogs">Blogs</a></li>
              <li><a href="{{url('/')}}/Contact">Contact</a></li>
              <li class="d-lg-none"><a href="{{url('/')}}/Post-job"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="{{url('/')}}/Login">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="{{url('/')}}/Post-job" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
              <a href="{{url('/')}}/Login" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    @yield('slider')
    @yield('content')

     <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div>
              <form method="post" action="{{url('/')}}/save">
                @csrf
                <div style="color:red;">{{ $errors->first('email') }}</div>
                <input type="text" name="email" class="form-control" id="inlineFormInputName" placeholder="Email.."><br />
                <button type="submit" class="form-control" style="background-color:green;color: #fff;">Subscribe</button>
              </form>
              
            </div><br />
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-whatsapp"></span></a>
              <a href="#"><span class="icon-youtube"></span></a>
            </div>
          </div>
        </div>
        <hr style="border: 1px solid white;">
        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>             
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | A2ZJOBS Design  <i class="icon-heart text-danger" aria-hidden="true"></i> By <a href="https://colorlib.com" target="_blank" >Shashikant</a>
            </small></p>
          </div>
        </div>
      </div>
    </footer>
  </div>

    <!-- SCRIPTS -->
    <script src="{{url('/')}}/js/jquery.min.js"></script>
    <script src="{{url('/')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{url('/')}}/js/stickyfill.min.js"></script>
    <script src="{{url('/')}}/js/jquery.fancybox.min.js"></script>
    <script src="{{url('/')}}/js/jquery.easing.1.3.js"></script>   
    <script src="{{url('/')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{url('/')}}/js/jquery.animateNumber.min.js"></script>
    <script src="{{url('/')}}/js/owl.carousel.min.js"></script>    
    <script src="{{url('/')}}/js/bootstrap-select.min.js"></script>
    <script src="{{url('/')}}/js/custom.js"></script> 
    <script src="js/quill.min.js"></script>  
  </body>
</html>

@yield('script')
