<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowUps extends Model
{
    protected $guarded=['updated_at','created_at'];
    protected $table='follow_ups';

}
