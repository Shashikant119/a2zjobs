 @extends('master')
 @section('title')
 A2ZJOBS | Services
 @endsection
 @section('content')
  <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Services</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Services</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section><br />
     <div class="row justify-content-center mb-5" data-aos="fade-up">
        <div class="container">
          <form method="post" action="{{url('/')}}/resize/resize_image" enctype="multipart/form-data">
              @csrf
            <input type="file" name="image">
             <input type="submit" class="btn btn-success" value="Submit">
          </form>
          <br />
          @if(count($errors) > 0)
             <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif

              @if($message = Session::get('success'))

               <div class="alert alert-success alert-block
               "> 
               <button type="button" class="close" data-dismiss="alert">x</button>
               <strong>{{ $message }}</strong>
             </div>
             <div class="row">
               <div class="col-md-6">
                  <strong>Original Image:</strong><br />
                    <img src="/images/{{Session::get('imageName') }}" class="img-responsive img-thumbnail">
                </div>
                <div class="col-md-4">
                   <strong>Thumbnail Image:</strong>
                   <br />
                   <img src="/thumbnail/{{ Session::get('image') }}" class="img-thumbnail" />
                 </div>
               </div>
               @endif
        </div>
    </div>
   
   @endsection 