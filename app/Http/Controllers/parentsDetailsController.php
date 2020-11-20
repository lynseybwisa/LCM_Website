<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parentsDetail;
use App\newStudent;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class parentsDetailsController extends Controller
{
    public function list(){
        $parents=parentsDetail::all();
        return view('admissions/parent');
    }

  
public function store(){
        $parents= new parentsDetail();
        $student=new newStudent();
        $student->Students_name=Request('students_name');
        $student->Nationality=Request('nationality');
        $student->DOB=Request('DOB');
        $student->Entry_date=Request('entry_date');
        $student->Residence=Request('residence');
        $student->Previous_School=Request('presentSchool');
        $student->School=Request('school');
        $student->Class=Request('class');
        $student->Boarding=Request('board');
        $parents->Father_name=Request('father_name');
        $parents->Mother_name=Request('mother_name');
        $parents->Father_tel=Request('father_tel');
        $parents->Mother_tel=Request('mother_tel');
        $parents->Father_email=Request('father_email');
        $parents->Mother_email=Request('mother_email');
        $parents->Survey=Request('Survey');
        $parents->save();
        $student->save();
        Mail::to("adminStaff@msongari.edu")->send(new WelcomeMail($student, $parents));
       return back();
   
    }
    
}
