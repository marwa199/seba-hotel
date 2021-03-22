@extends('rooms.master')
@section('content')
<br><br><br><br>
<center>
          <div class="tablee">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Type ID</th>
            <th scope="col">Room Number</th>
            <th scope="col">Number of Beds</th>
            <th scope="col">Max Number of Hosts</th>
            <th scope="col">Base Price</th>
            <th scope="col">Admin ID</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
        @foreach($room as $room1)
    <tr style='color:gray'>
     <td>{{$room1->id}}</td>
     <td>{{$room1->type_id}}</td>
     <td>{{$room1->rooms_nums}}</td>
     <td>{{$room1->num_beds}}</td>
     <td>{{$room1->max_num_hosts}}</td>
     <td>{{$room1->price}}</td>
     <td>{{$room1->admin_id}}</td>
    <td>
    <form action="{{route('room.destroy',$room1->id)}}" method="POST">
                <button class="button1">
                    <a class="button2 font-weight-bold" href="{{route('room.edit',$room1->id)}}">Update</a>
                </button>
                
                @csrf
                @method('DELETE')
                <input type="submit" value="delete">
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
     </div>
     <button class="button1">
        <a class="button2 font-weight-bold" href="{{route('room.create')}}">Add New Room</a>
    </button>
    <br><br>
</center>
@endsection