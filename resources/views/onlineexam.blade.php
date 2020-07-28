 @extends('master')
 @section('title')
 A2ZJOBS | Online Exam
 @endsection
 @section('content')
 <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');"id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Online Exam Test</h1>
            <div class="custom-breadcrumbs">
              <a href="index.html">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Online Exam Test Free </strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="next-section">
         <div class="container">
          <div class="row">
           <form class="questionForm" id="q1" action="#" method="#">
            @csrf
            <h5>1. Please select your gender:-</h5>
                <ul>
                 <li><input type="radio" name="q1" value="a"/>one</li>
                 <li><input type="radio" name="q1" value="a"/>two</li>
                 <li><input type="radio" name="q1" value="a"/>three</li>
                 <li><input type="radio" name="q1" value="a"/>four</li>
                </ul>
             <h5>2. Please select your gender:-</h5>
             <ul>
                 <li><input type="radio" name="q15" value="x"/>one</li>
                 <li><input type="radio" name="q15" value="x"/>two</li>
                 <li><input type="radio" name="q15" value="x"/>three</li>
                 <li><input type="radio" name="q15" value="x"/>four</li>
             </ul>
          <input type="submit" name="submit" value="Submit" class="btn btn-success">
          </form>
        </div>
      </div>
   </div>
    </section>
  @endsection  