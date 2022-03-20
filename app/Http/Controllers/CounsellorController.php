<?php

namespace App\Http\Controllers;

use App\Models\Counsellor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounsellorController extends Controller
{
    public function index()
    {
        return view('counsellor.index');
    }

    public function create()
    {
        $survey_questions = DB::table('surveyquestions')
            ->where('respondent_id', '1')
            ->get();

        $districts = DB::table('districts')
            ->select('district_id', 'dzongkhag_thromde')
            ->get();

        return view('counsellor.create', compact(['survey_questions', 'districts']));
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
            'C1'    =>  'string|required',
            'C2'    =>  'string|required|unique:counsellors',
            'C3'    =>  'string|required',
            'C4'    =>  'string|required',
            'C5'    =>  'string|required',
            'C6'    =>  'string|required',
            'C7'    =>  'string|required',
            'C8'    =>  'string|required',
            'C9'    =>  'string|required',
            'C10'   =>  'integer|required',
            'C11'   =>  'integer|required',
            'C12'   =>  'string|required',
            'C13'   =>  'string|required',
            'C14'   =>  'string|required',
            'C15'   =>  'string|required',
            'C16'   =>  'string|required',
            'C17'   =>  'string|required',
            'C18'   =>  'string|required',
            'C19'   =>  'string|required',
            'C20'   =>  'string|required',
            'C21'   =>  'string|required',
            'C22'   =>  'string|required',
            'C23'   =>  'string|required',
            'C24'   =>  'string|required',
            'C25'   =>  'string|required',
            'C26'   =>  'string|required',
            'C27'   =>  'string|required',
            'C28'   =>  'string|required',
        ],
            [
                'C2.unique' => 'Data entered for this email address!',
            ]
        );

        $counsellor = new Counsellor([
            'C1'    => $request->get('C1'),
            'C2'    => $request->get('C2'),
            'C3'    => $request->get('C3'),
            'C4'    => $request->get('C4'),
            'C5'    => $request->get('C5'),
            'C6'    => $request->get('C6'),
            'C7'    => $request->get('C7'),
            'C8'    => $request->get('C8'),
            'C9'    => $request->get('C9'),
            'C10'   => $request->get('C10'),
            'C11'   => $request->get('C11'),
            'C12'   => $request->get('C12'),
            'C13'   => $request->get('C13'),
            'C14'   => $request->get('C14'),
            'C15'   => $request->get('C15'),
            'C16'   => $request->get('C16'),
            'C17'   => $request->get('C17'),
            'C18'   => $request->get('C18'),
            'C19'   => $request->get('C19'),
            'C20'   => $request->get('C20'),
            'C21'   => $request->get('C21'),
            'C22'   => $request->get('C22'),
            'C23'   => $request->get('C23'),
            'C24'   => $request->get('C24'),
            'C25'   => $request->get('C25'),
            'C26'   => $request->get('C26'),
            'C27'   => $request->get('C27'),
            'C28'   => $request->get('C28'),
        ]);

        $counsellor->save();

        return redirect('/thankyou')->withSuccess('Survey has been recorded.');
    }

    public function show(Counsellor $counsellor)
    {
        //
    }

    public function edit(Counsellor $counsellor)
    {
        //
    }

    public function update(Request $request, Counsellor $counsellor)
    {
        //
    }

    public function destroy(Counsellor $counsellor)
    {
        //
    }
}
