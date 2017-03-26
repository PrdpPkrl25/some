<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gunaso extends Model
{
protected $guarded=['created_at','updated_at'];
protected $table='gunaso';
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
