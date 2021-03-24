@extends('seba.master')
@section('content')
<style>
 /* body {
    font-family: Arial, Helvetica, sans-serif;
  }
  */
  
  .flip-card {
    background-color: transparent;
    width: 450px;
    height: 360px;
    perspective: 1000px;
  }
  
  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  }
  
  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }
  
  .flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }
  
  .flip-card-front {
    background-color: rgb(241, 238, 227);
    color: black;
  }
  
  .flip-card-back {
    background-color: rgb(241, 238, 227);
    border: double rgb(189, 187, 180) 2px; 
    color: rgb(127,71,44);
    transform: rotateY(180deg);
  }
  .bokbtn{
    background-color: rgb(127,71,44);
    border: hidden;
    border-radius: 0%;
  }
  
  </style>
<section>
  
      <div class="container p-5">
      <h1 class="p-5 mt-5 font-weight-bolder text-center ">Our Rooms</h1>

          <div class="row  justify-content-center ">
            <div class="flip-card m-auto m-lg-3 mb-sm-3">
            <div class="flip-card-inner " >
               <div class="flip-card-front "> 
              <img src="images/rooms/147757460.jpg" class="card-img-top " alt="royal suit">
                <div class="card-img-overlay">
                    <h3 class="w-50 p-1 bg-light text-center"><span>from</span> $193</h3>
                </div>
                <div class="card-body p-2" >
                <h3 class="card-title">royal suit</h3>
              </div>
            </div>
            <div class="flip-card-back p-4">
                  
                  <p  class="card-text">1-2 persons <br> number of beds: 1 <br>type: suit<br> Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.
                  </p><br>
                  <a  href="booking/#res"  class="btn bokbtn text-white">Book Now</a>
                </div>
            </div>
            </div>
              <br>
              <div class="flip-card  m-auto m-lg-3 ">
              <div class="flip-card-inner " >
                 <div class="flip-card-front "> 
                <img src="images/rooms/170195853.jpg" class="card-img-top " alt="double room">
                  <div class="card-img-overlay">
                      <h3 class="w-50 p-1 bg-light text-center"><span>from</span> $245</h3>
                  </div>
                  <div class="card-body p-2">
                  <h3 class="card-title">double room</h3>
                </div>
              </div>
              <div class="flip-card-back p-4">
                    
                    <p  class="card-text">1-2 persons <br> number of beds: 1 <br>type: room<br> Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.
                    </p><br>
                    <a  href="booking/#res"  class="btn bokbtn text-white">Book Now</a>
                  </div>
              </div>
              </div>
              <br>
          </div>
{{-- ************************************************************* --}}
<br>
{{-- ************************************************************* --}}

<div class="row  justify-content-center ">
  <div class="flip-card m-auto m-lg-3 mb-sm-3">
  <div class="flip-card-inner " >
     <div class="flip-card-front "> 
    <img src="images/rooms/191803551.jpg" class="card-img-top " alt="royal suit">
      <div class="card-img-overlay">
          <h3 class="w-50 p-1 bg-light text-center"><span>from</span> $199</h3>
      </div>
      <div class="card-body p-2" >
      <h3 class="card-title">royal suit</h3>
    </div>
  </div>
  <div class="flip-card-back p-4">
        
        <p  class="card-text">1-2 persons <br> number of beds: 1 <br>type: suit<br> Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.
        </p><br>
        <a  href="booking/#res"  class="btn bokbtn text-white">Book Now</a>
      </div>
  </div>
  </div>
    <br>
    <div class="flip-card  m-auto m-lg-3 ">
    <div class="flip-card-inner " >
       <div class="flip-card-front "> 
      <img src="images/rooms/204271093.jpg" class="card-img-top " alt="double room">
        <div class="card-img-overlay">
            <h3 class="w-50 p-1 bg-light text-center"><span>from</span> $133</h3>
        </div>
        <div class="card-body p-2">
        <h3 class="card-title">double room</h3>
      </div>
    </div>
    <div class="flip-card-back p-4">
          
          <p  class="card-text">1-2 persons <br> number of beds: 1 <br>type: room<br> Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.
          </p><br>
          <a  href="booking/#res"  class="btn bokbtn text-white">Book Now</a>
        </div>
    </div>
    </div>
    <br>
</div>

{{-- ************************************************************* --}}
<br>
          
{{-- ************************************************************* --}}

<div class="row  justify-content-center ">
  <div class="flip-card m-auto m-lg-3 mb-sm-3">
  <div class="flip-card-inner " >
     <div class="flip-card-front "> 
    <img src="images/rooms/233344175.jpg" class="card-img-top " height="83%" alt="double room">
      <div class="card-img-overlay">
          <h3 class="w-50 p-1 bg-light text-center"><span>from</span> $199</h3>
      </div>
      <div class="card-body p-2" >
      <h3 class="card-title">double room</h3>
    </div>
  </div>
  <div class="flip-card-back p-4">
        
        <p  class="card-text">1-3 persons <br> number of beds: 2 <br>type: room<br> Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.
        </p><br>
        <a  href="booking/#res"  class="btn bokbtn text-white">Book Now</a>
      </div>
  </div>
  </div>
    <br>
    <div class="flip-card  m-auto m-lg-3 ">
    <div class="flip-card-inner " >
       <div class="flip-card-front "> 
      <img src="images/rooms/233344154.jpg" class="card-img-top " height="83%" alt="double room">
        <div class="card-img-overlay">
            <h3 class="w-50 p-1 bg-light text-center"><span>from</span> $133</h3>
        </div>
        <div class="card-body p-2">
        <h3 class="card-title">double room</h3>
      </div>
    </div>
    <div class="flip-card-back p-4">
          
          <p  class="card-text">1-3 persons <br> number of beds: 1 <br>type: room<br> Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.
          </p><br>
          <a  href="booking/#res"  class="btn bokbtn text-white">Book Now</a>
        </div>
    </div>
    </div>
    <br>
</div>

{{-- ************************************************************* --}} 
        <br>             
 {{-- ************************************************************* --}}

<div class="row  justify-content-center ">
  <div class="flip-card m-auto m-lg-3 mb-sm-3">
  <div class="flip-card-inner " >
     <div class="flip-card-front "> 
    <img src="images/rooms/270842615.jpg" class="card-img-top " height="83%" alt="single room">
      <div class="card-img-overlay">
          <h3 class="w-50 p-1 bg-light text-center"><span>from</span> $199</h3>
      </div>
      <div class="card-body p-2" >
      <h3 class="card-title">single room</h3>
    </div>
  </div>
  <div class="flip-card-back p-4">
        
        <p  class="card-text">1-2 persons <br> number of beds: 1 <br>type: room<br> Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.
        </p><br>
        <a  href="booking/#res"  class="btn bokbtn text-white">Book Now</a>
      </div>
  </div>
  </div>
    <br>
    <div class="flip-card  m-auto m-lg-3 ">
    <div class="flip-card-inner " >
       <div class="flip-card-front "> 
      <img src="images/rooms/34102285.jpg" class="card-img-top " height="83%" alt="family room">
        <div class="card-img-overlay">
            <h3 class="w-50 p-1 bg-light text-center"><span>from</span> $133</h3>
        </div>
        <div class="card-body p-2">
        <h3 class="card-title">family room</h3>
      </div>
    </div>
    <div class="flip-card-back p-4">
          
          <p  class="card-text">2-5 persons <br> number of beds: 3 <br>type: room<br> Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.
          </p><br>
          <a  href="booking/#res"  class="btn bokbtn text-white">Book Now</a>
        </div>
    </div>
    </div>
    <br>
</div>

{{-- ************************************************************* --}}             
           <br>
  {{-- ************************************************************* --}}

<div class="row  justify-content-center ">
  <div class="flip-card m-auto m-lg-3 mb-sm-3">
  <div class="flip-card-inner " >
     <div class="flip-card-front "> 
    <img src="images/rooms/61663842.jpg" class="card-img-top " height="83%" alt="family room">
      <div class="card-img-overlay">
          <h3 class="w-50 p-1 bg-light text-center"><span>from</span> $199</h3>
      </div>
      <div class="card-body p-2" >
      <h3 class="card-title">family room</h3>
    </div>
  </div>
  <div class="flip-card-back p-4">
        
        <p  class="card-text">2-5 persons <br> number of beds: 3 <br>type: room<br> Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.
        </p><br>
        <a  href="booking/#res"  class="btn bokbtn text-white">Book Now</a>
      </div>
  </div>
  </div>
    <br>
    <div class="flip-card  m-auto m-lg-3 ">
    <div class="flip-card-inner " >
       <div class="flip-card-front "> 
      <img src="images/rooms/34102346.jpg" class="card-img-top " height="83%" alt="family room">
        <div class="card-img-overlay">
            <h3 class="w-50 p-1 bg-light text-center"><span>from</span> $143</h3>
        </div>
        <div class="card-body p-2">
        <h3 class="card-title">family room</h3>
      </div>
    </div>
    <div class="flip-card-back p-4">
          
          <p  class="card-text">2-5 persons <br> number of beds: 3 <br>type: room<br> Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.
          </p><br>
          <a  href="booking/#res"  class="btn bokbtn text-white">Book Now</a>
        </div>
    </div>
    </div>
    <br>
</div>

           
  
              
      </div>

    </section>
  <br><br>
  
  @endsection