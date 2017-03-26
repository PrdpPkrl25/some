<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
protected $guarded=['updated_at','created_at'];
protected $table='authorities';
public function gunaso()
{
    return $this->belongsToMany('App\Gunaso');
}
}
