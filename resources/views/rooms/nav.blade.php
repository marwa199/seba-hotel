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
           <img src="images/home/Layer 02.png" class="logo" alt="Logo" > SEBA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon border-0"><i class="fa fa-bars" style="color: rgb(127,71,44);"></i></span>
          </button>
          <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav offset-3 text-center" >
              <li class="nav-item ">
                <a class="nav-link text-dark my-2 offset-1 " href="{{ url('home') }}">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark my-2 offset-1" href="{{route('room.index')}}">ROOMS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark my-2 offset-1" href="{{route('receptionist.index')}}">RECIPTIONISTS</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link text-dark offset-5 font-weight-bolder btn btn-warning " href="{{url('login')}}">login page</a>
               </li>
            </ul>
          </div>
          </nav>
     </div>