<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receptionist extends Model
{
    public $timestamps = false;

    protected $fillable=[
        'id','name','email','password','phone','address','admin_id'
    ];
}

