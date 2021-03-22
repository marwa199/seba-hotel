@extends('receptionists.master')
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
            <th scope="col">Admin ID</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
        @foreach($receptionist as $receptionist1)
    <tr style='color:gray'>
     <td>{{$receptionist1->id}}</td>
     <td>{{$receptionist1->name}}</td>
     <td>{{$receptionist1->email}}</td>
     <td>{{$receptionist1->password}}</td>
     <td>{{$receptionist1->phone}}</td>
     <td>{{$receptionist1->address}}</td>
     <td>{{$receptionist1->admin_id}}</td>
    <td>
    <form action="{{route('receptionist.destroy',$receptionist1->id)}}" method="POST">
                <button class="button1">
                    <a class="button2 font-weight-bold" href="{{route('receptionist.edit',$receptionist1->id)}}">Update</a>
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
        <a class="button2 font-weight-bold" href="{{route('receptionist.create')}}">Add New Receptioinst</a>
    </button>
    <br><br>
</center>
@endsection