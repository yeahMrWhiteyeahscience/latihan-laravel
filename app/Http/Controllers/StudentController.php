<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function index()
    {
        $quary = student::all();

        return view('student.index', compact(['quary']));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $createstudent = student::create([
            'nis'  => $request->nis,
            'name'  => $request->name,
            'gender'  => $request->gender,
            'religion'  => $request->religion,
            'birth_day'  => $request->birth_day,
            'class'  => $request->class,
            'address'  => $request->address,
        ]);
        return redirect('students');
    }

    public function delete(Request $request)
    {
        $deletedata = student::find($request->id);
        $deletedata->delete();

        return redirect('Students');
    }
}
