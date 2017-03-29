<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow_up extends Model
{
    protected $guarded=['updated_at','created_at'];
    protected $table='follow_ups';
}
