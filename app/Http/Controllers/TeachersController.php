<?php

namespace App\Http\Controllers;

use App\User;
use App\Teacher;
use App\Student;
use Illuminate\Http\Request;
use DB;

class TeachersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:staff');
    }

    public function index()
    {
        $students = Student::paginate(9);
        $studentes = Student::all();
        $reports = Teacher::all();

        return view('teachers.index',['students'=>$students,'reports'=>$reports,'studentes'=>$studentes]);
    }

    public function create()
    {
        $reports = Teacher::all();
        $students = Student::all();
        return view('teachers.create',['students'=>$students,'reports'=>$reports]);
    }

    public function studentReport($id)
    {
        $reports = Teacher::where('sid',$id)->get(); 
        $students = Student::where('id',$id)->first();
        return view('teachers.reports',['reports'=>$reports,'students'=>$students]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'sid'=>'required',
            'exam_name'=>'required',
            'from'=>'required|date_format:Y-m-d',
            'to'=>'required|date_format:Y-m-d'
        ]); 

        $report = new Teacher;
        $report->sid = $request->input('sid');
        $report->exam_name = $request->input('exam_name');
        $report->from = $request->input('from');
        $report->to = $request->input('to');
        $report->max_grade = $request->input('max_grade');
        $report->mat = $request->input('mat');
        $report->eng = $request->input('eng');
        $report->bio = $request->input('bio');
        $report->che = $request->input('che');
        $report->phy = $request->input('phy');
        $report->geo = $request->input('geo');
        $report->his = $request->input('his');
        $report->bus = $request->input('bus');
        $report->it = $request->input('it');
        $report->kis = $request->input('kis');
        $report->and = $request->input('and');
        $report->re = $request->input('re');
        $report->he = $request->input('he');
        $report->lit = $request->input('lit');
        
        $report->save();

        return redirect('/teachers')->with('success','Report Added.');
    }

    public function show(User $teacher)
    {

        return view('teachers.show', compact('teacher'));
    }


    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Teacher $teacher)
    {

    }
}
