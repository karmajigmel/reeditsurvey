<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function selectgender()
    {
        return view('student.genderselection');
    }

    public function create(Request $request)
    {
        $gender = $request->gender;

        if ($request->gender == 'F' or $request->gender == "O") {
            $survey_questions = DB::table('surveyquestions')
            ->where('respondent_id', '=', 3)
            ->get();
        } else {
            $survey_questions = DB::table('surveyquestions')
            ->where([
                    ['respondent_id', '=', 3],
                    ['respondent_sub_category', 'General']
                ])
            ->get();
        }

        $districts = DB::table('districts')
            ->select('district_id', 'dzongkhag_thromde')
            ->get();

        return view('student.create', compact(['survey_questions', 'gender', 'districts']));
    }

    public function getSchool()
    {
        $id = $_GET['dzongkhagID'];
        $schools = DB::table('schools')
            ->select('dzongkhag_thromde_id', 'school_name')
            ->where('dzongkhag_thromde_id', $id)
            ->get();
        return \Response::json($schools);
    }

    public function store(Request $request)
    {
        $request->validate([
            'S1'    => 'string|required',
            'S2'    => 'string|required',
            'S3'    => 'string|required',
            'S4'    => 'string|required',
            'S5'    => 'string|required',
            'S6'    => 'string|required',
            'S7'    => 'string|required',
            'S8'    => 'string|required',
            'S9'    => 'string|required',
            'S10'   => 'string|required',
            'S11'   => 'string|required',
            'S12'   => 'string|required',
            'S13'   => 'string|required',
            'S14'   => 'string|required',
            'S15'   => 'string|required',
            'S16'   => 'string|required',
            'S17'   => 'string|required',
            'S18'   => 'string|nullable',
            'S19'   => 'string|nullable',
            'S20'   => 'string|nullable',
            'S21'   => 'string|nullable',
            'S22'   => 'string|nullable',
            'S23'   => 'string|nullable',
            'S24'   => 'string|required',
            'S25'   => 'string|required',
        ]);

        $student = new Student([
            'S1'    =>  $request->get('S1'),
            'S2'    =>  $request->get('S2'),
            'S3'    =>  $request->get('S3'),
            'S4'    =>  $request->get('S4'),
            'S5'    =>  $request->get('S5'),
            'S6'    =>  $request->get('S6'),
            'S7'    =>  $request->get('S7'),
            'S8'    =>  $request->get('S8'),
            'S9'    =>  $request->get('S9'),
            'S10'   =>  $request->get('S10'),
            'S11'   =>  $request->get('S11'),
            'S12'   =>  $request->get('S12'),
            'S13'   =>  $request->get('S13'),
            'S14'   =>  $request->get('S14'),
            'S15'   =>  $request->get('S15'),
            'S16'   =>  $request->get('S16'),
            'S17'   =>  $request->get('S17'),
            'S18'   =>  $request->get('S18'),
            'S19'   =>  $request->get('S19'),
            'S20'   =>  $request->get('S20'),
            'S21'   =>  $request->get('S21'),
            'S22'   =>  $request->get('S22'),
            'S23'   =>  $request->get('S23'),
            'S24'   =>  $request->get('S24'),
            'S25'   =>  $request->get('S25'),
        ]);

        $student->save();

        return redirect('/thankyou')->withSuccess('Survey has been recorded.');
    }

    public function show(Student $student)
    {
        //
    }

    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }

    public function destroy(Student $student)
    {
        //
    }
}
