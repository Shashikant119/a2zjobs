@extends('master')
@section('title')
A2ZJOBS | Blog
@endsection
@section('content')
<!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Our Blogs</h1>
            <div class="custom-breadcrumbs">
              <a href="{{url('/')}}/">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>About Us</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
         <h3 style="color: #89ba16;"><u>Blogs</u></h3><br />
        <div class="row mb-5">   
           <ul>
             <h4><li>{{$data->title}}</li></h4>
             <p><li style="list-style: none;">{!! $data->body !!}</li></p>
             <li style="list-style: none;"><small>{{$data->created_at}}</small></li>
           </ul>
        </div>
      </div>
    </section>
  @endsection  