<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    
    protected $dates = ['created_at', 'updated_at', 'deleted_at','dob'];
    protected $casts = [
    'created_at' => 'datetime:Y-m-d',
    'updated_at' => 'datetime:Y-m-d',
    'deleted_at' => 'datetime:Y-m-d h:i:s'
 ];
}
