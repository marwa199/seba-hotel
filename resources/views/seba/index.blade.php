@extends('seba.master')
@section('content')

<div id="demo" class="carousel slide" data-ride="carousel">

      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/home/header1.jpg" alt="" >
          <div class="carousel-caption" >
            <h3 class="text-light">Just Book Now</h3>
            <p class="text-light">Hotel is always so much fun!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/home/header2.jpg" alt="" >
          <div class="carousel-caption bg-transparent" >
            <a href="booking.html" class="btn mb-5">Book Now</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/home/header4.jpg" alt="" >
          <div class="carousel-caption">
            <h3 class="text-light">Enjoy your holiday</h3>
            <p class="text-light">Hotel is always so much fun!</p>
          </div>
        </div>
      </div>
      
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  
      <br><br>

    <div class="container text-center w-50 my-5">
    <h1 class="font-weight-bold">About</h1>
    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus minus officia, quasi maxime laboriosam aut officiis. Minima repudiandae ducimus suscipit. Necessitatibus animi obcaecati, consectetur amet aut ipsum rerum dicta libero.</p>
    </div>

    <br><br><br><br>

    <div class="container m-auto ">
      <div class="card img-fluid">
        <img id="img1" class="card-img-top" src="images/home/15.jpg" alt="Card image">
        <div class="card-img-top p-3" id="card1">
          <h4 class="card-title text-left text-center font-weight-bolder">Hours Rule</h4>
          <p class="card-text  bg-transparent text-center text-dark">Check-in is any time after 
            2PM and check out by 11AM.
            <br>We can store your luggage for a few days </p>
        </div>
      </div>
    </div>

<br><br><br><br>

    <div class="container-fluid m-auto  text-sm-center row mt-4 justify-content-center" >
      <div class="d-inline-block m-3 ">
        <i class="fa fa-wifi mx-5" id="icons"></i>
        <p class="m-3">Fast Wifi</p>
      </div>
      <div class="d-inline-block m-3">
        <i class="fa fa-coffee mx-5" id="icons"></i>
        <p class="m-3">coffee</p>
      </div>
      <div class="d-inline-block m-3">
        <i class="fa fa-star mx-5" id="icons"></i>
        <p class="m-3">7stars</p>
      </div>
      <div class="d-inline-block m-3">
        <i class="fa fa-tv mx-5" id="icons"></i>
        <p class="m-3">Smart TV</p>
      </div>
      <div class="d-inline-block m-3">
        <i class="fa fa-taxi mx-5" id="icons"></i>
        <p class="m-3">Taxi</p>
      </div>
      <div class="d-inline-block m-3">
        <i class="fa fa-bath mx-5" id="icons"></i>
        <p class="m-3">Bath</p>
      </div>
    </div>

    <br><br><br><br>

    <div class="container-fluid m-auto row mt-4 mb-5 justify-content-center pb-5" >
    <div class="card text-sm-center d-inline-block col-lg-4 col-sm-12  border-0">
      <img class="card-img-top h-50" src="images/home/16.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title font-weight-bolder">Enjoy your Time</h4>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi velit dolor quaerat, facilis enim quis.</p>
      </div>
    </div>
    <div class="card text-sm-center d-inline-block col-lg-4 col-sm-12 border-0">
      <img class="card-img-top h-50" src="images/home/20.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title  font-weight-bolder">Choose your room </h4>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi velit dolor quaerat, facilis enim quis.</p>
      </div>
    </div>
    <div class="card text-sm-center d-inline-block col-lg-4 col-sm-12 border-0">
      <img class="card-img-top h-50" src="images/home/22.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title  font-weight-bolder">Best room services</h4>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi velit dolor quaerat, facilis enim quis.</p>
      </div>
    </div>
    <a href="about.html" class="btn text-light p-2">See more</a>
  </div>

  <br><br><br><br>

    <div class="container m-auto row mt-4 justify-content-center" >
    <div class="card text-sm-center d-inline-block border-0 col-lg-3 col-sm-12 p-2 m-auto">
      <img class="card-img-top rounded-circle h-25 w-25" src="images/home/p3.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">"Best time"</h4>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi velit dolor quaerat, facilis enim quis.</p>
        <p class="text-danger">"Andro Mjøs"</p>
      </div>
    </div>
    <div class="card  text-sm-center d-inline-block border-0 col-lg-3 col-sm-12 p-3 m-auto">
      <img class="card-img-top rounded-circle h-25 w-25" src="images/home/p4.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">"A great find" </h4>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi velit dolor quaerat, facilis enim quis.</p>
        <p class="text-danger">"Mary Cruz"</p>
      </div>
    </div>
    <div class="card  text-sm-center d-inline-block border-0 col-lg-3 col-sm-12 p-2 m-auto">
      <img class="card-img-top rounded-circle h-25 w-25" src="images/home/p5.png" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">"Nice position"</h4>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi velit dolor quaerat, facilis enim quis.</p>
        <p class="text-danger">"Mia Skurdal"</p>
      </div>
    </div>
  </div>

  <br><br><br><br>

  <div class="container-fluid m-auto row mt-5 justify-content-center" id="addcomment">
      <p class="m-5">Let Us Know Your Opinion</p>
      <textarea class="my-5" name="" id=""  placeholder="your comment" ></textarea>
      <button  class="btn m-5 px-5 py-2 text-light "type="submit" value="SUBMIT">SUBMIT</button>
  </div>

  @endsection
  