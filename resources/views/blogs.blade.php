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
             @foreach($data as $value)
             <h4><li style="list-style: none;"><a href="{{url('/')}}/Show/">{{$value->title}}</a></li></h4>
              <li style="list-style: none;"> <small>{{$value->created_at}}</small></li>
              @endforeach
           </ul>
        </div>
      </div>
    </section>
  @endsection  