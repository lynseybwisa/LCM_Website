<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class DataController extends Controller
{
       public function getSchools(){
            $schools = DB::table('schools')->pluck("name","id");
             return view('admissions/parent',compact('schools'));
                  }

        public function getClasses($id){        
        $classes = DB::table("classes")->where("school_id",$id)->pluck("name","id");
        return json_encode($classes);
				}
 
}



