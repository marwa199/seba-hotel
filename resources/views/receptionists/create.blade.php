

@extends('receptionists.master')
@section('content')
<br> <br>
<ul>
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>
<br>
      <div class="threee offset-4 mt-5 col-lg-4 col-sm-6 ">

        <form action="{{route('receptionist.store')}}" method="POST">
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
                <input name="password" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
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
                <label for="formGroupExampleInput2"><b>Admin ID</b></label>
                <input name="admin_id" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Admin ID">

                  <br>
                  <center>
                  <input type="submit" value="save">
                  </center>
              </div>
          </form>
        </div>
        @endsection