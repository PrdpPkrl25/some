<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded=['updated_at','created_at'];
    protected $table='comment';
    public function gunaso()
    {
        return $this->belongsTo('App\Gunaso');
    }
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
    public function info()
    {
        return $this->belongsToMany('App\Info');
    }
}
