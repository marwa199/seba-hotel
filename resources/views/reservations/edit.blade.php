@extends('reservations.master')
@section('content')
<ul>
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>
<br> <br>
      <div class="threee offset-4 mt-5 col-lg-4 col-sm-6 ">

        <form action="{{route('reservation.update',$reservation->id)}}" method="POST">
        @csrf
@method('PUT')
            <div class="form-group ">
              <label for="formGroupExampleInput"><b>Reservation Date</b></label>
              <input name ="reservation_date" value="{{$reservation->reservation_date}}" type="date" class="form-control " id="formGroupExampleInput" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"><b>Check In Date</b></label>
              <input name="checkin_date" value="{{$reservation->checkin_date}}" type="date" class="form-control" id="formGroupExampleInput2" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2"><b>Check Out Date</b></label>
                <input name="checkout_date" value="{{$reservation->checkout_date}}" type="date" class="form-control" id="formGroupExampleInput2" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>User ID</b></label>
                <input name="user_id" value="{{$reservation->user_id}}" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Phone">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>Receptionist ID</b></label>
                <input name="receptionist_id" value="{{$reservation->receptionist_id}}" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Address">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>Room ID</b></label>
                <input name="room_id" value="{{$reservation->room_id}}"  type="number" class="form-control" id="formGroupExampleInput2" placeholder="Admin ID">

                  <br>
                  <center>
                  <input class="button2 font-weight-bold" type="submit" value="save">

                  </center>
              </div>
          </form>
        </div>

        @endsection
