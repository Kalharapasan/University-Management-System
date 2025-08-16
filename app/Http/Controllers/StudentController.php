<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Http\Response;
use Illuminate\Http\View;



class StudentController extends Controller
{

    protected $student;
    protected $stu_record;

    public function __construct(){

        $this->student = new Student();
        $this->stu_record = new StuRecord();

    }

    public function index(){

        $response['students'] = $this->student->all();
        return view('pages.student.index')->with($response);

    }

    public function save(Request $request){

        //dd($request->all());

        $this->student->create($request->all());
        return redirect()->back();

    }


    public function delete($stu_id){

        $student = $this->student->find($stu_id);
        $student->delete();
        return redirect()->back();

    }


    public function edit($stu_id){

        $response['student'] = $this->student->find($stu_id);
        return view('pages.student.edit')->with($response);
    }



    public function update(Request $request, $stu_id){

        $student = $this->student->find($stu_id);

        $student->update(array_merge($student->toArray(), $request->toArray()));
        return redirect('student');

    }


    public function vewRecords($stu_id){

        $response['student'] = $this->student->find($stu_id);
        $response['stuRecords'] = $this->stu_record->where('student_id', $stu_id)->get();

        return view('pages.student.manage')->with($response);
    }

    public function saveRecord(Request $request){

        $this->stu_record->create($request->all());
        return redirect()->back();
    }


}
