<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded=['updated_at','created_at'];
    protected $table='tags';
    public function gunaso()
    {
        return $this->belongsToMany('App\Gunaso');
    }
}
