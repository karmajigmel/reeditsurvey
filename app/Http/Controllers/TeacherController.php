<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.index');
    }

    public function create()
    {
        $survey_questions = DB::table('surveyquestions')
            ->where('respondent_id', '4')
            ->get();

        $districts = DB::table('districts')
            ->select('district_id', 'dzongkhag_thromde')
            ->get();

        return view('teacher.create', compact(['survey_questions', 'districts']));
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
        $request->validate(
            [
            'TG1'    =>  'string|required',
            'TG2'    =>  'string|required|unique:teachers',
            'TG3'    =>  'string|required',
            'TG4'    =>  'string|required',
            'TG5'    =>  'string|required',
            'TG6'    =>  'string|required',
            'TG7'    =>  'string|required',
            'TG8'    =>  'string|required',
            'TG9'    =>  'string|required',
            'TG10'   =>  'string|required',
            'TG11'   =>  'string|required',
            'TG12'   =>  'string|required',
            'TG13'   =>  'string|required',
            'TG14'   =>  'string|required',
            'TG15'   =>  'string|required',
            'TG16'   =>  'string|required',
            'TG17'   =>  'string|required',
            'TG18'   =>  'string|required',
            'TG19'   =>  'string|required',
            'TG20'   =>  'string|required',
            'TG21'   =>  'string|required',
            'TG22'   =>  'string|required',
            'TG23'   =>  'string|required',
            'TG24'   =>  'string|required',
            'TG25'   =>  'string|required',
            'TG26'   =>  'string|required',
            'TG27'   =>  'string|required',
            'TG28'   =>  'string|required',
            'TG29'   =>  'string|required',
        ],
            [
                'TG2.unique' => 'Data entered for this email address!',
            ]
        );

        $teacher = new Teacher([
            'TG1'    =>  $request->get('TG1'),
            'TG2'    =>  $request->get('TG2'),
            'TG3'    =>  $request->get('TG3'),
            'TG4'    =>  $request->get('TG4'),
            'TG5'    =>  $request->get('TG5'),
            'TG6'    =>  $request->get('TG6'),
            'TG7'    =>  $request->get('TG7'),
            'TG8'    =>  $request->get('TG8'),
            'TG9'    =>  $request->get('TG9'),
            'TG10'   =>  $request->get('TG10'),
            'TG11'   =>  $request->get('TG11'),
            'TG12'   =>  $request->get('TG12'),
            'TG13'   =>  $request->get('TG13'),
            'TG14'   =>  $request->get('TG14'),
            'TG15'   =>  $request->get('TG15'),
            'TG16'   =>  $request->get('TG16'),
            'TG17'   =>  $request->get('TG17'),
            'TG18'   =>  $request->get('TG18'),
            'TG19'   =>  $request->get('TG19'),
            'TG20'   =>  $request->get('TG20'),
            'TG21'   =>  $request->get('TG21'),
            'TG22'   =>  $request->get('TG22'),
            'TG23'   =>  $request->get('TG23'),
            'TG24'   =>  $request->get('TG24'),
            'TG25'   =>  $request->get('TG25'),
            'TG26'   =>  $request->get('TG26'),
            'TG27'   =>  $request->get('TG27'),
            'TG28'   =>  $request->get('TG28'),
            'TG29'   =>  $request->get('TG29'),
        ]);

        $teacher->save();

        return redirect('/thankyou')->withSuccess('Survey has been recorded.');
    }

    public function show(Teacher $teacher)
    {
        //
    }

    public function edit(Teacher $teacher)
    {
        //
    }

    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    public function destroy(Teacher $teacher)
    {
        //
    }
}
