@extends('seba.master')
@section('content')

<div class="row">
    <nav class="navbar navbar-expand-md bg-light  fixed-top " >
      
      <a class="navbar-brand mx-4   align-content-center" style="font-size:50px;" href="home.html">
        <img src="images/Layer 02.png" alt="Logo" style="width:50px; position: relative; bottom: 10px;"> SEBA
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon border-0"><i class="fa fa-bars" style="color: rgb(127,71,44);"></i></span>
      </button>
      <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item ">
            <a class="nav-link text-dark my-2 " href="home.html">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark my-2" href="about.html">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark my-2" href="rooms.html">ROOMS</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link text-dark my-2" href="booking.html">RESERVATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black-50 my-2 selected" href="cont.html">CONTACT</a>
          </li>
        </ul>
      </div>
      </nav>
 </div>

  <header>
      <img class="img-fluid w-100" src="images/contact.jpeg"> 
  </header>

  <content>
    <div class="container">
    <div class="m-5 pt-5 text-center">
      <h2 class=""> Feel free to write at info@seba.com</h2>
      <p> Morbi viverra viverra tincidunt. Nam condimentum nulla<br> et tortor
          Duisanisi mattis, vehicula augue id, aliquet risus.</p>
          <br><br>
    </div>
    </div>

    <div class="container-fluid map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14102.909668795735!2d34.32445697089677!3d27.91033703517732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145337874a9d678b%3A0x5196877e0aa024d0!2sNaama%20Bay!5e0!3m2!1sen!2seg!4v1616195152223!5m2!1sen!2seg" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="container">
    <div class="m-5 pt-3">
      <h2>How can we help you?</h2>
      <p>Maecenas consectetur, diam nec posuere aliquam, libero sapien 
      aliquet lacus  </p>
    </div>

  <div class="row p-3">
    
    <div class="col-lg-3 col-md-6 pt-4 pb-1">
      <div class="d-flex flex-column">
        <div class="text-center">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <h3>Adress</h3>
          <p class="text-info">1235dolorcamp road<br> Lorem ipsum dolor sit  </p> 
          <hr> 
        </div>
          <br>
        <div class="text-center">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <h3>Phone</h3>
        <p class="text-info"> 567-456-342 </p>
        <hr> 
        </div>
          <br>
        <div class="text-center">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
        <h3>Email</h3>
        <p class="text-info"> SEBA@gmail.com </p>
        </div>

      </div>
    </div>

    <form class="col-lg-9 col-md-12 p-5">
      <div class="container">
        <div class="form-group">
          <label for="formGroupExampleInput">Full Name</label>
          <input type="text" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Email Address</label>
          <input type="email" class="form-control" id="formGroupExampleInput2">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">type your message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-outline-secondary">Send</button> 
      </div>
    </form>
  </div>

</div>

<div class="container-fluid row mt-5 justify-content-center" id="addcomment">
  <p class="m-5">What's in your mind ...</p>
  <textarea class="my-5" name="" id=""  placeholder="your comment" ></textarea>
  <button  class="btn m-5 px-5 py-2 text-light " type="submit" value="SUBMIT">SUBMIT</button>
</div>

</div>
</content>