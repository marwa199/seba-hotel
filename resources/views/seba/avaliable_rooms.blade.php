@extends('seba.master')
@section('content')

<section>
    <div class="container p-5">
        <div class="row h-100">
            <div class="card p-0 mt-5 col-lg-5 col-sm-11 m-auto text-center d-inline-block mt-sm-4">
                <img src="images/rooms/147757460.jpg" class="card-img-top" alt="royal suit">
                <div class="card-body">
                    <h3 class="card-title">royal suit</h3>
                    <h6 class="card-title">1-2 persons</h6>
                    <p class="card-text">Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.</p>
                    <form action="booked_successfully" method="POST">
                        @csrf
                        <input class="btn btn-dark mt-3 text-white" type="submit" value="Book Now">
                    </form>
                </div>
            </div>

            <div class="card mt-5 p-0 d-inline-block col-lg-5 col-sm-11 m-auto text-center mt-sm-4">
                <img src="images/rooms/170195853.jpg" class="card-img-top p-0" alt="double room">
                <div class="card-body" style="z-index: 1;">
                    <h3 class="card-title ">double room</h3>
                    <h6 class="card-title">1-2 persons</h6>
                    <p class="card-text">Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.</p>
                    <form action="booked_successfully" method="POST">
                        @csrf
                        <input class="btn btn-dark mt-3 text-white" type="submit" value="Book Now">
                    </form>
                </div>
            </div>
        </div>

        <div class="row h-100 mt-lg-5">
            <div class="card mt-5 p-0 d-inline-block col-lg-5 col-sm-11 m-auto text-center mt-sm-4">
                <img src="images/rooms/191803551.jpg" class="card-img-top" alt="royal suit">
                <div class="card-body">
                    <h3 class="card-title ">royal suit</h3>
                    <h6 class="card-title">1-2 persons</h6>
                    <p class="card-text">Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.</p>
                    <form action="booked_successfully" method="POST">
                        @csrf
                        <input class="btn btn-dark mt-3 text-white" type="submit" value="Book Now">
                    </form>
                </div>
            </div>

            <div class="card mt-5 p-0 d-inline-block col-lg-5 col-sm-11 m-auto text-center mt-sm-4">
                <img src="images/rooms/204271093.jpg" class="card-img-top" alt="double room">
                <div class="card-body">
                    <h3 class="card-title ">double room</h3>
                    <h6 class="card-title">1-2 persons</h6>
                    <p class="card-text">Lorem ipsum dolor sit voluptatem molestiae, soluta fuga error sapiente, natus quam perferendis.</p>
                    <form action="booked_successfully" method="POST">
                        @csrf
                        <input class="btn btn-dark mt-3 text-white" type="submit" value="Book Now">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection