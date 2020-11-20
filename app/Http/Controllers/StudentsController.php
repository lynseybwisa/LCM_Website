<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function index()
  {
    $students = Student::paginate(9);
    $studentes = Student::all();

    return view('admin.index',['students'=>$students,'studentes'=>$studentes]);
  }

  public function create()
  {
    return view('admin.create');
  }

  public function studentReport($id)
  {
      $reports = Teacher::where('sid',$id)->get(); 
      $students = Student::where('id',$id)->first();
      return view('admin.reports',['reports'=>$reports,'students'=>$students]);
  }

  public function store()
  {
    //add validation
    $data = request()->validate([
      'name' => 'required|min:3',
      'email' => 'required|email',
      'school' => 'required',
      'dob' => 'required|date_format:Y-m-d',

    ]);


    Student::create($data);

    return redirect('students');
  }

  public function show(Student $student)
  {

    return view('admin.show', compact('student'));
  }


  public function edit($id)
  {
    $student = Student::find($id);
        return view('admin.edit')->with('student',$student);
  }

  public function update(Student $student)
  {
    //add validation
    $data = request()->validate([
      'name' => 'required|min:3',
      'email' => 'required|email',
      'dob' => 'required|date_format:Y-m-d',

    ]);
    $student->update($data);

    return redirect('students/' . $student->id);
  }
}
