<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="icon" href="{{asset('images/home/Layer 02.png')}}">
    <title>SEBA-Hotel</title>
 </head>
 <body>
     <div class="row">
         <nav class="navbar navbar-expand-md bg-light  fixed-top " >
           <a class="navbar-brand offset-2  align-content-center" style="font-size:35px;" href="home.html">
           <img src="images/home/Layer 02.png" class="logo" alt="Logo" >SEBA</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon border-0"><i class="fa fa-bars" style="color: rgb(127,71,44);"></i></span>
           </button>
           <div class="collapse navbar-collapse " id="collapsibleNavbar">
             <ul class="navbar-nav offset-3 text-center" >
               <li class="nav-item ">
                 <a class="nav-link text-dark my-2 offset-1 "   href="{{ url('home1') }}">HOME</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link text-dark my-2 offset-1 " href="{{route('users.index')}}">USERS</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link text-dark my-2 offset-1 " href="{{route('reservation.index')}}">RESERVATIONS</a>
               </li>
             </ul>
           </div>
           </nav>
      </div>
</body>


@extends('users.master')
@section('content')
<br> <br>
<ul>
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>
<br>
      <div class="threee offset-4 mt-5 col-lg-4 col-sm-6 ">

        <form action="{{route('users.store')}}" method="POST">
        @csrf
            <div class="form-group ">
              <label for="formGroupExampleInput"><b>Name</b></label>
              <input name = "name" type="text" class="form-control " id="formGroupExampleInput" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"><b>Email</b></label>
              <input name="email" type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2"><b>Password</b></label>
                <input name="checkout_date" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>Phone</b></label>
                <input name="phone" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Phone">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>Address</b></label>
                <input name ="address" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Address">
              </div>
              <div class="form-group">
                

                  <br>
                  <center>
                  <input type="submit" value="save" class="button2 font-weight-bold">
                  </center>
              </div>
          </form>
        </div>
        @endsection