<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded=['created_at','updated_at'];
    protected $table='file';
}
