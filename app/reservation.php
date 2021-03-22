<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    public $timestamps = false;

    protected $fillable=[
        'id','reservation_date','checkin_date','checkout_date','user_id','receptionist_id','room_id'
    ];
}
