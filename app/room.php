<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    public $timestamps = false;

    protected $fillable=[
        'id','num_beds','rooms_nums','max_num_hosts','price','admin_id','type_id'
    ];
}

