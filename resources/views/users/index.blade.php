@extends('users.master')
@section('content')
<br><br><br><br>
<center>
          <div class="tablee">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
        @foreach($user as $user1)
    <tr style='color:gray'>
     <td>{{$user1->id}}</td>
     <td>{{$user1->name}}</td>
     <td>{{$user1->email}}</td>
     <td>{{$user1->password}}</td>
     <td>{{$user1->phone}}</td>
     <td>{{$user1->address}}</td>
    <td>
    <form action="{{route('users.destroy',$user1->id)}}" method="POST">
                <button class="button1">
                    <a class="button2 font-weight-bold" href="{{route('users.edit',$user1->id)}}">Update</a>
                </button>
                
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="button2 font-weight-bold"  >
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
     </div>
     <button class="button1">
        <a class="button2 font-weight-bold" href="{{route('users.create')}}">Add New User</a>
    </button>
    <br><br>
</center>
@endsection