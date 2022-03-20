<?php

namespace App\Http\Controllers;

use App\Models\Teachersen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeachersenController extends Controller
{
    public function index()
    {
        return view('teachersen.index');
    }

    public function create()
    {
        $survey_questions = DB::table('surveyquestions')
            ->where('respondent_id', '5')
            ->get();

        $districts = DB::table('districts')
            ->select('district_id', 'dzongkhag_thromde')
            ->get();

        return view('teachersen.create', compact(['survey_questions', 'districts']));
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
            'TS1'    =>  'string|required',
            'TS2'    =>  'string|required|unique:teachersens',
            'TS3'    =>  'string|required',
            'TS4'    =>  'string|required',
            'TS5'    =>  'string|required',
            'TS6'    =>  'string|required',
            'TS7'    =>  'string|required',
            'TS8'    =>  'string|required',
            'TS9'    =>  'string|required',
            'TS10'   =>  'string|required',
            'TS11'   =>  'string|required',
            'TS12'   =>  'string|required',
            'TS13'   =>  'string|required',
            'TS14'   =>  'string|required',
            'TS15'   =>  'string|required',
            'TS16'   =>  'string|required',
            'TS17'   =>  'string|required',
            'TS18'   =>  'string|required',
            'TS19'   =>  'string|required',
            'TS20'   =>  'string|required',
            'TS21'   =>  'string|required',
            'TS22'   =>  'string|required',
            'TS23'   =>  'string|required',
            'TS24'   =>  'string|required',
            'TS25'   =>  'string|required',
            'TS26'   =>  'string|required',
            'TS27'   =>  'string|required',
            'TS28'   =>  'string|required',
            'TS29'   =>  'string|required',
            'TS30'   =>  'string|required',
            'TS31'   =>  'string|required',
            'TS32'   =>  'string|required',
        ],
            [
                'TS2.unique' => 'Data entered for this email address!',
            ]
        );

        $teachersen = new Teachersen([
            'TS1'    =>  $request->get('TS1'),
            'TS2'    =>  $request->get('TS2'),
            'TS3'    =>  $request->get('TS3'),
            'TS4'    =>  $request->get('TS4'),
            'TS5'    =>  $request->get('TS5'),
            'TS6'    =>  $request->get('TS6'),
            'TS7'    =>  $request->get('TS7'),
            'TS8'    =>  $request->get('TS8'),
            'TS9'    =>  $request->get('TS9'),
            'TS10'   =>  $request->get('TS10'),
            'TS11'   =>  $request->get('TS11'),
            'TS12'   =>  $request->get('TS12'),
            'TS13'   =>  $request->get('TS13'),
            'TS14'   =>  $request->get('TS14'),
            'TS15'   =>  $request->get('TS15'),
            'TS16'   =>  $request->get('TS16'),
            'TS17'   =>  $request->get('TS17'),
            'TS18'   =>  $request->get('TS18'),
            'TS19'   =>  $request->get('TS19'),
            'TS20'   =>  $request->get('TS20'),
            'TS21'   =>  $request->get('TS21'),
            'TS22'   =>  $request->get('TS22'),
            'TS23'   =>  $request->get('TS23'),
            'TS24'   =>  $request->get('TS24'),
            'TS25'   =>  $request->get('TS25'),
            'TS26'   =>  $request->get('TS26'),
            'TS27'   =>  $request->get('TS27'),
            'TS28'   =>  $request->get('TS28'),
            'TS29'   =>  $request->get('TS29'),
            'TS30'   =>  $request->get('TS30'),
            'TS31'   =>  $request->get('TS31'),
            'TS32'   =>  $request->get('TS32'),
        ]);

        $teachersen->save();

        return redirect('/thankyou')->withSuccess('Survey has been recorded.');
    }

    public function show(Teachersen $teachersen)
    {
        //
    }

    public function edit(Teachersen $teachersen)
    {
        //
    }

    public function update(Request $request, Teachersen $teachersen)
    {
        //
    }

    public function destroy(Teachersen $teachersen)
    {
        //
    }
}
