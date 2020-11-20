<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function getSchoolAttribute($attribute)
    {
    	return [
         1 => 'Boarding',
         0 => 'Day School',
    	][$attribute];
    }

    public function scopeBoarding($query)
    {
    	return $query->where('school', 1);
    }

    public function scopeDay($query)
    {
    	return $query->where('school', 0);
    } 

    
protected $dates = ['created_at', 'updated_at', 'deleted_at','dob'];
   protected $casts = [
   'created_at' => 'datetime:Y-m-d',
   'updated_at' => 'datetime:Y-m-d',
   'deleted_at' => 'datetime:Y-m-d h:i:s'
];
}
