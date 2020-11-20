<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        
        return view('layout');
    }
    public function sports()
    {
        
        return view('students/sports');
    }
    public function cirricular()
    {
        
        return view('students/cirricular');
    }
    public function alumni()
    {
        
        return view('students/alumni');
    }
   
}
