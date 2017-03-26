<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $guarded=['updated_at','created_at'];
    protected $table='registration';
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
