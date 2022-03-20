<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\CounsellorsExport;
use App\Exports\PrincipalsExport;
use App\Exports\TeachersExport;
use App\Exports\TeachersensExport;
use App\Exports\StudentsExport;
use App\Exports\AllDataExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class AdminController extends Controller
{
    protected $currentTime;
    public function __construct()
    {
        $this->currentTime = Carbon::now('Asia/Dhaka');
    }

    public function allDataExport()
    {
        return Excel::download(new AllDataExport, 'all_data_'. $this->currentTime .'.xlsx');
    }

    public function cExport()
    {
        return Excel::download(new CounsellorsExport, 'counsellors_data_'. $this->currentTime . '.xlsx');
    }

    public function pExport()
    {
        return Excel::download(new PrincipalsExport, 'principals_data_'. $this->currentTime . '.xlsx');
    }

    public function tgExport()
    {
        return Excel::download(new TeachersExport, 'teachers_data_'. $this->currentTime . '.xlsx');
    }

    public function tsExport()
    {
        return Excel::download(new TeachersensExport, 'teachersens_data_'. $this->currentTime . '.xlsx');
    }

    public function sExport()
    {
        return Excel::download(new StudentsExport, 'students_data_'. $this->currentTime . '.xlsx');
    }

    public function pData()
    {
        $principal_responses = DB::table('principals')
            ->leftJoin('districts', 'principals.P3', '=', 'districts.district_id')
            ->select('id', 'P2', 'P4', 'P5', 'P6', 'dzongkhag_thromde', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.principal', compact('principal_responses'));
    }

    public function cData()
    {
        $counsellor_responses = DB::table('counsellors')
            ->leftJoin('districts', 'counsellors.C3', '=', 'districts.district_id')
            ->select('id', 'C2', 'C4', 'C5', 'C6', 'dzongkhag_thromde', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.counsellor', compact('counsellor_responses'));
    }

    public function tgData()
    {
        $teacher_responses = DB::table('teachers')
            ->leftJoin('districts', 'teachers.TG3', '=', 'districts.district_id')
            ->select('id', 'TG2', 'TG4', 'TG5', 'TG6', 'dzongkhag_thromde', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.teacher', compact('teacher_responses'));
    }

    public function tsData()
    {
        $teachersen_responses = DB::table('teachersens')
            ->leftJoin('districts', 'teachersens.TS3', '=', 'districts.district_id')
            ->select('id', 'TS2', 'TS4', 'TS5', 'TS6', 'dzongkhag_thromde', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.teachersen', compact('teachersen_responses'));
    }

    public function sData()
    {
        $student_responses = DB::table('students')
            ->leftJoin('districts', 'students.S2', '=', 'districts.district_id')
            ->select('id', 'S3', 'S4', 'S5', 'dzongkhag_thromde', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.student', compact('student_responses'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function pDataShow($id)
    {
        $principaldata = DB::table('principals')
            ->where('id', $id)
            ->leftJoin('districts', 'principals.P3', '=', 'districts.district_id')
            ->get()
            ->toArray();

        return view('admin.principalshow', compact('principaldata'));
    }

    public function cDataShow($id)
    {
        $counsellordata = DB::table('counsellors')
            ->where('id', $id)
            ->leftJoin('districts', 'counsellors.C3', '=', 'districts.district_id')
            ->get()
            ->toArray();

        return view('admin.counsellorshow', compact('counsellordata'));
    }

    public function tgDataShow($id)
    {
        $teacherdata = DB::table('teachers')
            ->where('id', $id)
            ->leftJoin('districts', 'teachers.TG3', '=', 'districts.district_id')
            ->get()
            ->toArray();

        return view('admin.teachershow', compact('teacherdata'));
    }

    public function tsDataShow($id)
    {
        $teachersendata = DB::table('teachersens')
            ->where('id', $id)
            ->leftJoin('districts', 'teachersens.TS3', '=', 'districts.district_id')
            ->get()
            ->toArray();

        return view('admin.teachersenshow', compact('teachersendata'));
    }

    public function sDataShow($id)
    {
        $studentdata = DB::table('students')
            ->where('id', $id)
            ->leftJoin('districts', 'students.S2', '=', 'districts.district_id')
            ->get()
            ->toArray();

        return view('admin.studentshow', compact('studentdata'));
    }

    public function edit(Admin $admin)
    {
        //
    }

    public function update(Request $request, Admin $admin)
    {
        //
    }

    public function destroy(Admin $admin)
    {
        //
    }
}
