@extends('reservations.master')
@section('content')
<br><br><br><br>
<center>
          <div class="tablee">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Reservation Date</th>
            <th scope="col">Check In Date</th>
            <th scope="col">Check Out Date</th>
            <th scope="col">User ID</th>
            <th scope="col">Receptionist ID</th>
            <th scope="col">Room ID</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($reservation as $reservation1)
    <tr style='color:gray'>
     <td>{{$reservation1->id}}</td>
     <td>{{$reservation1->reservation_date}}</td>
     <td>{{$reservation1->checkin_date}}</td>
     <td>{{$reservation1->checkout_date}}</td>
     <td>{{$reservation1->user_id}}</td>
     <td>{{$reservation1->receptionist_id}}</td>
     <td>{{$reservation1->room_id}}</td>
    <td>
    <form action="{{route('reservation.destroy',$reservation1->id)}}" method="POST">
                <button class="button1">
                    <a class="button2 font-weight-bold" href="{{route('reservation.edit',$reservation1->id)}}">Update</a>
                </button>
                
                @csrf
                @method('DELETE')
                <input class="button2 font-weight-bold" type="submit" value="Delete">
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
     </div>
     <button class="button1">
        <a class="button2 font-weight-bold" href="{{route('reservation.create')}}">Add New Reservation</a>
    </button>
    <br><br>
</center>
@endsection