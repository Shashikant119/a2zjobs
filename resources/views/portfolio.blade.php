@extends('master')
@section('title')
A2ZJOBS | portfolio
@endsection
@section('content')
 <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Portfolio (Extra Pages)</h1>
            <div class="custom-breadcrumbs">
              <a href="{{url('/')}}/">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Portfolio</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section block__62272" id="next-section">
      

      <div class="container">

        
        <div class="row justify-content-center mb-5" data-aos="fade-up">
          <div id="filters" class="filters text-center button-group col-md-7">
            <button class="btn btn-primary active" data-filter="*">All</button>
            <button class="btn btn-primary" data-filter=".web">Web</button>
            <button class="btn btn-primary" data-filter=".design">Design</button>
            <button class="btn btn-primary" data-filter=".brand">Brand</button>
          </div>
        </div>  
        
        <div id="posts" class="row no-gutter">
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="#" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_1.jpg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="#" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_2.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="#" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_3.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">

            <a href="#" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_4.jpg">
            </a>

          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="portfolio-single.html" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_5.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="#" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_6.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="#" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_7.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="#" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_8.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="#" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_9.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="#" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_10.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="#" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_11.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="#" class="item-wrap">
              <span class="icon-add"></span>
              <img class="img-fluid" src="images/sq_img_12.jpg">
            </a>
          </div>


        </div>
      </div>

    </section>
  @endsection  