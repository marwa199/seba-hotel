<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="icon" href="{{asset('images/home/Layer 02.png')}}">
    <title>SEBA-Hotel login</title>
</head>
<body>
    <br><br><br><br><br>
<div class="row">
        <nav class="navbar navbar-expand-md bg-light  fixed-top " >
          <a class="navbar-brand offset-2  align-content-center" style="font-size:35px;" href="home.html">SEBA</a>
</nav>


<div class="container">
<div class="login-form">

<a href="{{url('login')}}" type="submit" class="btnn btn btn-danger w-25 btn-block">Log in as an admin</a>



    <form action="{{url('home')}}" class="w-50 m-auto" method="GET">
        <h2 class="text-center">Log in as receptionist</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
        <input type="submit" class="btnn  btn-block" value="log in">
        </div>
             
    </form>
    
</div>
</div>
</body>
</html>