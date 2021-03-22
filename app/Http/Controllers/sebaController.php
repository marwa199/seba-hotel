<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;

class sebacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room=room::paginate(7);
        return view('rooms.index',compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
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
            'type_id'=>'required',
            'rooms_nums'=>'required',
            'num_beds'=>'required',
            'max_num_hosts'=>'required',
            'price'=>'required',
            'admin_id'=>'required'
        ]);
        room::create($request->all());
        return redirect()->route('room.index');
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
    public function edit( room $room)
    {
        return view('rooms.edit',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, room $room)
    {
        $request->validate([
            'type_id'=>'required',
            'rooms_nums'=>'required',
            'num_beds'=>'required',
            'max_num_hosts'=>'required',
            'price'=>'required',
            'admin_id'=>'required'
        ]);
        $room -> update($request->all());
        return redirect()->route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(room $room)
    {
        $room->delete();
        return redirect()->route('room.index');
    }
}

