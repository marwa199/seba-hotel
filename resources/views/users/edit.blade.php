@extends('users.master')
@section('content')
<ul>
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>
<br> <br>
      <div class="threee offset-4 mt-5 col-lg-4 col-sm-6 ">

        <form action="{{route('users.update',$user->id)}}" method="POST">
        @csrf
@method('PUT')
            <div class="form-group ">
              <label for="formGroupExampleInput"><b>Name</b></label>
              <input name ="name" value="{{$user->name}}" type="text" class="form-control " id="formGroupExampleInput" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"><b>Email</b></label>
              <input name="email" value="{{$user->email}}" type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2"><b>Password</b></label>
                <input name="password" value="{{$user->password}}" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>Phone</b></label>
                <input name="phone" value="{{$user->phone}}" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Phone">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>Address</b></label>
                <input name="address" value="{{$user->address}}" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Address">
              </div>
              <div class="form-group">
                

                  <br>
                  <center>
                  <input type="submit" value="save">

                  </center>
              </div>
          </form>
        </div>

        @endsection
