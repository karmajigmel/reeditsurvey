<?php

namespace App\Http\Controllers;

use App\Models\Principal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('principal.index');
    }

    public function create()
    {
        $survey_questions = DB::table('surveyquestions')
            ->where('respondent_id', '2')
            ->get();

        $districts = DB::table('districts')
            ->select('district_id', 'dzongkhag_thromde')
            ->get();

        return view('principal.create', compact(['survey_questions', 'districts']));
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
            'P1'    =>  'string|required',
            'P2'    =>  'string|required|unique:principals',
            'P3'    =>  'string|required',
            'P4'    =>  'string|required',
            'P5'    =>  'string|required',
            'P6'    =>  'string|required',
            'P7'    =>  'string|required',
            'P8'    =>  'string|required',
            'P9'    =>  'string|required',
            'P10'   =>  'string|required',
            'P11'   =>  'string|required',
            'P12'   =>  'string|required',
            'P13'   =>  'string|required',
            'P14'   =>  'string|required',
            'P15'   =>  'string|required',
            'P16'   =>  'string|required',
            'P17'   =>  'string|required',
            'P18'   =>  'string|required',
            'P19'   =>  'string|required',
            'P20'   =>  'string|required',
            'P21'   =>  'string|required',
            'P22'   =>  'string|required',
            'P23'   =>  'string|required',
            'P24'   =>  'string|required',
            'P25'   =>  'string|required',
            'P26'   =>  'string|required',
            'P27'   =>  'string|required',
            'P28'   =>  'string|required',
            'P29'   =>  'string|required',
            'P30'   =>  'string|required',
            'P31'   =>  'string|required',
            'P32'   =>  'string|required',
            'P33'   =>  'string|required',
            'P34'   =>  'string|required',
            'P35'   =>  'string|required',
            'P36'   =>  'string|required',
            'P37'   =>  'string|required',
            'P38'   =>  'string|required',
            'P39'   =>  'string|required',
            'P40'   =>  'string|required',
            'P41'   =>  'string|required',
            'P42'   =>  'string|required',
            'P43'   =>  'string|required',
            'P44'   =>  'string|required',
            'P45'   =>  'string|required',
            'P46'   =>  'string|required',
            'P47'   =>  'string|required',
            'P48'   =>  'string|required',
            'P49'   =>  'string|required',
            'P50'   =>  'string|required',
            'P51'   =>  'string|required',
            'P52'   =>  'string|required',
            'P53'   =>  'string|required',
            'P54'   =>  'string|required',
            'P55'   =>  'string|required',
            'P56'   =>  'string|required',
            'P57'   =>  'string|required',
            'P58'   =>  'string|required',
        ],
            [
                'P2.unique' => 'Data entered for this email address!',
            ]
        );

        $principal = new Principal([
            'P1'    =>  $request->get('P1'),
            'P2'    =>  $request->get('P2'),
            'P3'    =>  $request->get('P3'),
            'P4'    =>  $request->get('P4'),
            'P5'    =>  $request->get('P5'),
            'P6'    =>  $request->get('P6'),
            'P7'    =>  $request->get('P7'),
            'P8'    =>  $request->get('P8'),
            'P9'    =>  $request->get('P9'),
            'P10'   =>  $request->get('P10'),
            'P11'   =>  $request->get('P11'),
            'P12'   =>  $request->get('P12'),
            'P13'   =>  $request->get('P13'),
            'P14'   =>  $request->get('P14'),
            'P15'   =>  $request->get('P15'),
            'P16'   =>  $request->get('P16'),
            'P17'   =>  $request->get('P17'),
            'P18'   =>  $request->get('P18'),
            'P19'   =>  $request->get('P19'),
            'P20'   =>  $request->get('P20'),
            'P21'   =>  $request->get('P21'),
            'P22'   =>  $request->get('P22'),
            'P23'   =>  $request->get('P23'),
            'P24'   =>  $request->get('P24'),
            'P25'   =>  $request->get('P25'),
            'P26'   =>  $request->get('P26'),
            'P27'   =>  $request->get('P27'),
            'P28'   =>  $request->get('P28'),
            'P29'   =>  $request->get('P29'),
            'P30'   =>  $request->get('P30'),
            'P31'   =>  $request->get('P31'),
            'P32'   =>  $request->get('P32'),
            'P33'   =>  $request->get('P33'),
            'P34'   =>  $request->get('P34'),
            'P35'   =>  $request->get('P35'),
            'P36'   =>  $request->get('P36'),
            'P37'   =>  $request->get('P37'),
            'P38'   =>  $request->get('P38'),
            'P39'   =>  $request->get('P39'),
            'P40'   =>  $request->get('P40'),
            'P41'   =>  $request->get('P41'),
            'P42'   =>  $request->get('P42'),
            'P43'   =>  $request->get('P43'),
            'P44'   =>  $request->get('P44'),
            'P45'   =>  $request->get('P45'),
            'P46'   =>  $request->get('P46'),
            'P47'   =>  $request->get('P47'),
            'P48'   =>  $request->get('P48'),
            'P49'   =>  $request->get('P49'),
            'P50'   =>  $request->get('P50'),
            'P51'   =>  $request->get('P51'),
            'P52'   =>  $request->get('P52'),
            'P53'   =>  $request->get('P53'),
            'P54'   =>  $request->get('P54'),
            'P55'   =>  $request->get('P55'),
            'P56'   =>  $request->get('P56'),
            'P57'   =>  $request->get('P57'),
            'P58'   =>  $request->get('P58'),
        ]);

        $principal->save();

        return redirect('/thankyou')->withSuccess('Survey has been recorded.');
    }

    public function show(principal $principal)
    {
        //
    }

    public function edit(principal $principal)
    {
        //
    }

    public function update(Request $request, principal $principal)
    {
        //
    }

    public function destroy(principal $principal)
    {
        //
    }
}
