<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $guarded=['updated_at','created_at'];
    protected $table='info';
}
