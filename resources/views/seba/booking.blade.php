@extends('seba.master')
@section('content')

<br><br>


<div id="demo" class="carousel slide booking m-5 w-50 h-auto m-auto " data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/rooms/147757460.jpg" alt="resort">
    </div>
    <div class="carousel-item">
      <img src="images/rooms/191803551.jpg" alt="resort">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<br><br><br><br>

<div class="container-fluid row mt-4 p-5 m-auto">

  <h3 class="feat m-auto font-weight-bolder p-2">Features</h3>
  <div class="row ">
    <div class="col-lg-3 col-sm-6 text-center p-5">
      <i class="fas fa-bath" id="icons"></i>
      <p class="m-auto pt-1">Bathtub</p>
    </div>

    <div class="col-lg-3 col-sm-6 text-center p-5">
      <i class="fas fa-dumbbell" id="icons"></i>
      <p class="m-auto pt-1">Gym</p>
    </div>

    <div class="col-lg-3 col-sm-6 text-center p-5">
      <i class="fas fa-concierge-bell " id="icons"></i>
      <p class="m-auto pt-1">Room service</p>
    </div>

    <div class="col-lg-3 col-sm-6 text-center p-5">
      <i class="fas fa-tv " id="icons"></i>
      <p class="m-auto pt-1">Cable TV</p>
    </div>

    <div class="col-lg-3 col-sm-6 text-center p-5">
      <i class="fas fa-luggage-cart " id="icons"></i>
      <p class="m-auto pt-1">Luggage storage</p>
    </div>

    <div class="col-lg-3 col-sm-6 text-center p-5">
      <i class="fas fa-coffee" id="icons"></i>
      <p class="m-auto pt-1">Tea/Coffee</p>
    </div>

    <div class="col-lg-3 col-sm-6 text-center p-5">
      <i class="fas fa-bus-alt " id="icons"></i>
      <p class="m-auto pt-1">Transport</p>
    </div>

    <div class="col-lg-3 col-sm-6 text-center p-5">
      <i class="fas fa-glass-cheers " id="icons"></i>
      <p class="m-auto pt-1">Night club</p>
    </div>
  </div>
</div>

<br><br><br><br>

<div class="w-75 text-center mx-auto">
  <hr class=" mb-5">
  <h3 class=" p-3">House Rules </h3>
  <p>- Smoking is not allowed.<br>
    - Check-in is any time after 2PM and check out by 11AM.We can store your luggage for a few days</p>
  <br>
  <h3 class=" p-3">Cancellation </h3>
  <p>Cancel up to 3 days to get a full refund.</p>
  <br><br>
  <hr class=" mb-2">
</div>

<br><br>

<div class="d-flex flex-lg-row flex-sm-column m-5 p-5 justify-content-center">
  <div class="d-inline-block p-5">
    <h3 class="d-inline-block">Your Reservation</h3>
    <br><br>
    <form class="d-inline-block mx-sm-auto pr-5" method="POST" action="avaliable_rooms">
      @csrf
      <div class="form-group">
        <label for="formGroupExampleInput" class="input-label text-dark">check-in Date:</label>
        <input type="date" class="form-control bg-transparent " id="formGroupExampleInput" name="check_in_date" required>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2" class="input-label text-dark">check-out Date:</label>
        <input type="date" class="form-control bg-transparent " id="formGroupExampleInput2" name="check_out_date" required>
      </div>
      <div class="row">
        <div class="form-group col-3 text-center">
          <label for="Adults" class="input-label">Adults</label>
          <select name="adults_num" id="adults" class="options p-1" required>
            <option value="0">0</option>
            <option value="0" selected="selected">1</option>
            <option value="0">2</option>
            <option value="0">3</option>
            <option value="0">4</option>
            <option value="0">5</option>
          </select>
        </div>
        <div class="form-group col-3 text-center">
          <label for="children" class="input-label">children</label>
          <select name="childern_num" id="children" class="options p-1">
            <option value="0">0</option>
            <option value="0">1</option>
            <option value="0">2</option>
            <option value="0">3</option>
            <option value="0">4</option>
            <option value="0">5</option>
          </select>
        </div>
      </div>

      <input class="btn mt-3  text-white" type="submit" value="show available rooms">
    </form>
  </div>
  <div class="img pl-lg-5"> <img src="images/the-darling-stellar-pyrmont-view-portrait.jpg" alt="City Tour"></div>
</div>


<br><br>

@endsection