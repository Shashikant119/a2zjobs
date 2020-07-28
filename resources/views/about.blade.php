 @extends('master')
 @section('title')
 A2ZJOBS | About Us
 @endsection
 @section('content')
 <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">About Us</h1>
            <div class="custom-breadcrumbs">
              <a href="{{url('/')}}/">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>About Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

   <!--  <section class="site-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a data-fancybox data-ratio="2" href="https://www.youtube.com/watch?v=V6uOFgokxWU" class="block__96788">
              <span class="play-icon"><span class="icon-play"></span></span>
              <img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">JobBoard For Freelancers, Web Developers</h2>
            <p class="lead">Eveniet voluptatibus voluptates suscipit minima, cum voluptatum ut dolor, sed facere corporis qui, ea quisquam quis odit minus nulla vitae. Sit, voluptatem.</p>
            <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit!</p>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
            <a data-fancybox data-ratio="2" href="https://www.youtube.com/watch?v=37DsbPmXRpI" class="block__96788">
              <span class="play-icon"><span class="icon-play"></span></span>
              <img src="images/sq_img_8.jpg" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
            <h2 class="section-title mb-3">JobBoard For Workers</h2>
            <p class="lead">Eveniet voluptatibus voluptates suscipit minima, cum voluptatum ut dolor, sed facere corporis qui, ea quisquam quis odit minus nulla vitae. Sit, voluptatem.</p>
            <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit!</p>
          </div>
        </div>
      </div>
    </section> -->

   
    <section class="site-section">
      <div class="container">
        <div class="row mb-5">
        </div>
        <div class="row align-items-center block__69944">

               
           @foreach($data as $value)
           <div class="col-md-6 order-md-2 ml-md-auto">
            <img src="{{url('/')}}/images/{{$value->image}}" alt="Image" class="img-fluid mb-4 rounded">
          </div>
                 {!! $value->about !!}
           @endforeach
         <!-- <div class="col-md-6">
           
             <h3>RELIABLE QUALITY AND CARE</h3>
             <h4>Essential IT Tools and Service</h4>
             <h5>
            We work round the clock to provide the support services you need

            ...when you need them.</h5><br>
            <p>About Us</p>
            <p>A2ZJOBS IT Company. provides a range of Information Technology services designed for business productivity. From expert installation, outsourcing and implementation to Hosted Solutions.</p>
            <p>Today, we deliver the most comprehensive suite of managed IT services. Our proven service portfolio meets the varying needs of customers with implementation services or complete outsourced and Hosted IT solutions. Our known Quality Service allows us to provide all our customers with an efficient, seamless and worry-free "Remote IT department".</p>
            <p>The result? Thanks to a proven track record of providing proactive managed services and technical expertise, IT Companies customers are able to:</p>
            <div class="social mt-4">
              <a href="https://www.facebook.com/shasi.kant.71" target="_blanck"><span class="icon-facebook"></span></a>
              <a href="https://mobile.twitter.com/Shashik84079314" target="_blanck"><span class="icon-twitter"></span></a>
              <a href="https://www.instagram.com/kantshashi518/" target="_blanck"><span class="icon-instagram"></span></a>
               <a href="https://www.youtube.com/channel/UCroOffETtEXkczRvOfKCU7Q?view_as=subscriber" target="_blanck"><span class="icon-youtube"></span></a>
                <a href="https://api.whatsapp.com/send?phone=919451018768&text=&source=&data=" target="_blanck"><span class="icon-whatsapp"></span></a>
            </div> 
          </div> -->
      </div>
    </section>
  @endsection  