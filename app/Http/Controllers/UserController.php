<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use DataTables;
use Redirect, Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                     $action = '
                     <a class="btn btn-info" id="show-user" data-toggle="modal" data-id='.$row->id.'>Show</a>
                     <a class="btn btn-success" href="/students/'.$row->id.'/edit" id="edit-user" data-toggle="modal" data-id='.$row->id.'>Edit </a>
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                     <a id="delete-Student" data-id='.$row->id.' class="btn btn-danger delete-user">Delete</a>';
                     return $action;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('users');
    }

    public function store(Request $request)
    {

        $r = $request->validate([
            'name' => 'required',
            'email' => 'required',

        ]);

        $uId = $request->user_id;
        Student::updateOrCreate(['id' => $uId], ['name' => $request->name, 'email' => $request->email]);
        if (empty($request->user_id))
            $msg = 'Student created successfully.';
        else
            $msg = 'Student data is updated successfully';
        return redirect()->route('users.index')->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $where = array('id' => $id);
        $Student = Student::where($where)->first();
        return Response::json($Student);
        //return view('users.show',compact('Student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $where = array('id' => $id);
        $Student = Student::where($where)->first();
        return Response::json($Student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $Student = Student::where('id', $id)->delete();
        return Response::json($Student);
        //return redirect()->route('users.index');
    }
}
