<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservation;
use DB;

class reservationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation=reservation::paginate(7);
        return view('reservations.index',compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'reservation_date'=>'required',
            'checkin_date'=>'required',
            'checkout_date'=>'required',
            'user_id'=>'required',
            'receptionist_id'=>'required',
            'room_id'=>'required'
        ]);
        reservation::create($request->all());
        return redirect()->route('reservation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        return view('reservations.edit',compact('reservation'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        $request->validate([
            'reservation_date'=>'required',
            'checkin_date'=>'required',
            'checkout_date'=>'required',
            'user_id'=>'required',
            'receptionist_id'=>'required',
            'room_id'=>'required'
        ]);
        $reservation -> update($request->all());
        return redirect()->route('reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservation.index');
    }
}

