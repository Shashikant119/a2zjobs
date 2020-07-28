@extends('master')
@section('title')
A2ZJOBS | Web Design
@endsection
@section('content')
<!---start slide Toggle --->
<script> 
$(document).ready(function(){
  $("#more").click(function(){
    $("#read").slideToggle("slow");
  });
});
</script>
<!----start time----->
<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
 <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Web Design</h1>
            <div class="custom-breadcrumbs">
              <a href="{{url('/')}}/">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Web Design</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br />
   <div class="container">
    <aside class="row">
    <div class="col-md-9">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="card shadow">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{url('/')}}/img/thumbs/img1.jpg" style="max-height: 400px;" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('/')}}/img/thumbs/img2.jpg" style="max-height: 400px;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('/')}}/img/thumbs/img3.jpg" style="max-height: 400px;" alt="Third slide">
    </div>
  </div></div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>
<h3>'रामायण' में 'सीता' का किरदार निभाने वाली दीपिका की शादी की ये तस्वीरें हो रही हैं वायरल</h3>
<p>दीपिका सोशल मीडिया के माध्यम से दर्शकों से जुड़ी हुई है. अभिनेत्री धारावाहिक 'रामायण' और अपने अभिनय करियर से जुड़ी बातों को साझा करती रहती हैं, लेकिन कभी-कभी वह अपने व्यक्तिगत जीवन की कुछ शानदार तस्वीरें भी साझा करती हैं</p>
<div id="more" class="btn btn-success">Read More</div>
<div id="read" style="padding: 20px;display: none;border:1px  solid #89ba16;">
<p>रामानंद सागर के टीवी सीरियल रामायण में सीता का किरदार निभाने वाली अभिनेत्री दीपिका चिखलिया दर्शकों के बीच प्रचलित हैं. उनकी एक मजबूत फैंन फॉलोइंग है और वह सोशल मीडिया के माध्यम से दर्शकों से जुड़ी हुई है. अभिनेत्री धारावाहिक 'रामायण' और अपने अभिनय करियर से जुड़ी कहानियों को साझा करती रहती हैं, लेकिन कभी-कभी वह अपने व्यक्तिगत जीवन की कुछ शानदार तस्वीरें भी साझा करती हैं. हाल ही में, अभिनेत्री ने अपनी शादी के दौरान चंद फोटो को अपने इंस्टाग्राम हैंडल से साझा किया है.</p>
<p>बता दें जब रामायण की दोबारा शुरुआत हुई है धारावाहिक में लक्ष्मण की भूमिका निभाने वाले अभिनेता सुनील लाहिड़ी ट्विटर पर अधिक देखे जाते हैं, दूसरी ओर, दीपिका चिखलिया, जो सीता की भूमिका निभाती हैं, इंस्टाग्राम पर अधिक सक्रिय हैं. </p>
<p>दीपिका ने चंद शादी की फोटो शेयर की है जिसमें वह अपने पति हेमंत टोपीवाला के साथ नजर आ रही हैं. फोटो बहुत खूबसूरत है और उस दौरान की है जब दीपिका अपने पति के गले में फूलों की माला डालने जा रही थी. दीपिका ने फोटो के साथ कैप्शन में लिखा है, ''मैं सोच रही थी कि क्या आप लोग कभी जानना चाहेंगे कि मैं अपने पति से कैसे मिली''. दीपिका को यह कहने में देरी हुई कि कमेंट बॉक्स में, प्रशंसकों ने मांग शुरू कर दी कि दीपिका एक किस्सा साझा करें कि जब वह पहली बार अपने पति से मिले. </p>
<p>दीपिका चिखलिया ने हेमंत टोपीवाला से 1991 में शादी की. बॉलीवुड के सुपरस्टार राजेश खन्ना भी उनकी शादी में आए. इस दौरान की कई तस्वीरें भी सोशल मीडिया पर वायरल हुईं.</p>
<p>लॉकडाउन के कारण दूरदर्शन पर रामायण का प्रसारण किया गया था. तब से, अरविंद त्रिवेदी से लेकर सीरियल के अन्य कलाकारों जैसे अरुण गोविल, दीपिका चिखलिया, सुनील लाहिड़ी की लोकप्रियता तेजी से लोगों के बीच तेजी में बढ़ी.</p>
</div>
<div class="row" >
<div class="colo-md-3"><br>
   <img src="{{url('/')}}/images/shashikant.jpg" style="height: 300px;width: 270px;margin-left: 16px;">
</div>
<div class="colo-md-6" style="width: 63%;
  padding-left: 15px;
  margin-left: 15px;
  float: right;
  font-style: italic;
  background-color: lightgray;">
  <aside >
 <p>लॉकडाउन के कारण दूरदर्शन पर रामायण का प्रसारण किया गया था. तब से, अरविंद त्रिवेदी से लेकर सीरियल के अन्य कलाकारों जैसे अरुण गोविल, दीपिका चिखलिया, सुनील लाहिड़ी की लोकप्रियता तेजी से लोगों के बीच तेजी में बढ़ी.</p>
 </aside>
</div>
</div>
    </div>
    <aside class="col-md-3">
      <center><button id="demo" style="color:red;font-size: 18px;"></button></center>
         <div class="card border-0 shadow">
            <img src="{{url('/')}}/images/shashikant.jpg" style="height: 230px;">
            <div style="margin-left: 10px;margin-right: 5px;">
               <strong>Hello</strong><span> Hii</span>
            </div>
         </div><br>
         <div class="card shadow">
            <img src="{{url('/')}}/images/shashikant.jpg" style="height: 230px;">
            <div style="margin-left: 10px;margin-right: 5px;">
               <strong>Hello</strong><span> Hii</span>
            </div>
         </div><br>
         <div class="card shadow">
             <div>
                 <img src="{{url('/')}}/images/shashikant.jpg" style="width: 80px;height: 80px;"> 
              </div>
              <h3>hiiiiiiiii</h3>
         </div><br>
        <div class="card shadow" style="background-color: lightblue;border:1px solid #89ba16;height: 200px;">
           <div style="background-color: #89ba16;color:#fff;"><center><strong style="font-size: 18px;">Usefull Links</strong></center></div>
          <!--  <hr style="border:1px solid #89ba16;"> -->
           <marquee direction="up" scrollamount="3" onmouseover="stop()" onmouseout="start()">
            <ul>
             <li><a href="">shashikant verma</a></li>
             <li><a href="">shashikant</a></li>
             <li><a href="">shashikant</a></li>
             <li><a href="">shashikant</a></li>
             <li><a href="">shashikant</a></li> 
           </ul>
          </marquee>
          </div><br>
          <div style="background-color: #89ba16;color:#fff;padding:6px;"><strong style="font-size: 18px;"><a href="#" style="color:#fff;"> Online Registration</a></strong>
          </div>
          <br>
          <div style="background-color: #89ba16;color:#fff;padding:6px;"><strong style="font-size: 18px;"><a href="#" style="color:#fff;"><marquee behavior="alternate">News $ Event</marquee></a></strong>
        </div>  
        </div>   
  </aside>
  </aside> 
  <div> 
  </div> 
   </div><br>
   <marquee direction="left"><h3 style="color:red;"><u>A2ZJOBS</u></h3></marquee>
  <br />  
  @endsection  