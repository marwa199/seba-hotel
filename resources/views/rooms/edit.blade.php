@extends('rooms.master')
@section('content')
<ul>
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>
<br> <br>
      <div class="threee offset-4 mt-5 col-lg-4 col-sm-6 ">

        <form action="{{route('room.update',$room->id)}}" method="POST">
        @csrf
@method('PUT')
            <div class="form-group ">
              <label for="formGroupExampleInput"><b>Type ID</b></label>
              <input name ="type_id" value="{{$room->type_id}}" type="number" class="form-control " id="formGroupExampleInput" placeholder="Type ID">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"><b>Room Number</b></label>
              <input name="rooms_nums" value="{{$room->rooms_nums}}" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Room Number">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2"><b>Number of Beds</b></label>
                <input name="num_beds" value="{{$room->num_beds}}" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Number of Beds">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>Max Number of Hosts</b></label>
                <input name="max_num_hosts" value="{{$room->max_num_hosts}}" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Max Number of Hosts">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>Base Price</b></label>
                <input name="price" value="{{$room->price}}" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Base Price">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>Admin ID</b></label>
                <input name="admin_id" value="{{$room->admin_id}}"  type="number" class="form-control" id="formGroupExampleInput2" placeholder="Admin ID">

                  <br>
                  <center>
                  <input type="submit" value="save">

                  </center>
              </div>
          </form>
        </div>

        @endsection
