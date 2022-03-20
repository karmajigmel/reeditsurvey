<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\CounsellorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeachersenController;
use App\Http\Controllers\AdminController;
use App\Models\Counsellor;
use App\Models\Principal;
use App\Models\Teacher;
use App\Models\Teachersen;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $counsellor_count = Counsellor::count();
    $principal_count = Principal::count();
    $teacher_count = Teacher::count();
    $teachersen_count = Teachersen::count();
    $student_count = Student::count();

    $principals_by_school = DB::table("principals")
        ->select("P4", DB::raw("COUNT(P4) as count"))
        ->orderBy("P4")
        ->groupBy(DB::raw("P4"))
        ->get();

    $counsellors_by_school = DB::table("counsellors")
        ->select("C4", DB::raw("COUNT(C4) as count"))
        ->orderBy("C4")
        ->groupBy(DB::raw("C4"))
        ->get();

    $teachers_by_school = DB::table("teachers")
        ->select("TG4", DB::raw("COUNT(TG4) as count"))
        ->orderBy("TG4")
        ->groupBy(DB::raw("TG4"))
        ->get();

    $senteachers_by_school = DB::table("teachersens")
        ->select("TS4", DB::raw("COUNT(TS4) as count"))
        ->orderBy("TS4")
        ->groupBy(DB::raw("TS4"))
        ->get();

    $students_by_school = DB::table("students")
        ->select("S3", DB::raw("COUNT(S3) as count"))
        ->orderBy("S3")
        ->groupBy(DB::raw("S3"))
        ->get();

    return view('dashboard', compact([
        'counsellor_count',
        'principal_count',
        'teacher_count',
        'teachersen_count',
        'student_count',
        'principals_by_school',
        'counsellors_by_school',
        'teachers_by_school',
        'senteachers_by_school',
        'students_by_school'
    ]));
})->middleware(['auth'])->name('dashboard');

Route::get('/teachercategory', function () {
    return view('teachercategory');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/generalthankyou', function () {
    return view('generalthankyou');
});

# Principal
Route::get('/principal', [PrincipalController::class, 'index'])->name('principal_index');
Route::get('/principal-create', [PrincipalController::class, 'create'])->name('principal_create');
Route::post('/principal-store', [PrincipalController::class, 'store'])->name('principal_store');
Route::get('/getSchool/{id}', [PrincipalController::class, 'getSchool']);

# Counsellor
Route::get('/counsellor', [CounsellorController::class, 'index'])->name('counsellor_index');
Route::get('/counsellor-create', [CounsellorController::class, 'create'])->name('counsellor_create');
Route::post('/counsellor-store', [CounsellorController::class, 'store'])->name('counsellor_store');
Route::get('/getSchool/{id}', [CounsellorController::class, 'getSchool']);


# Student
Route::get('/student', [StudentController::class, 'index'])->name('student_index');
Route::get('/student-gender', [StudentController::class, 'selectgender'])->name('student_gender');
Route::get('/student-create', [StudentController::class, 'create'])->name('student_create');
Route::post('/student-store', [StudentController::class, 'store'])->name('student_store');
Route::get('/getSchool/{id}', [StudentController::class, 'getSchool']);

# Teacher - Regular School
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher_index');
Route::get('/teacher-create', [TeacherController::class, 'create'])->name('teacher_create');
Route::post('/teacher-store', [TeacherController::class, 'store'])->name('teacher_store');
Route::get('/getSchool/{id}', [TeacherController::class, 'getSchool']);

# Teacher - SEN / Special Institute
Route::get('/teachersen', [TeachersenController::class, 'index'])->name('teachersen_index');
Route::get('/teachersen-create', [TeachersenController::class, 'create'])->name('teachersen_create');
Route::post('/teachersen-store', [TeachersenController::class, 'store'])->name('teachersen_store');
Route::get('/getSchool/{id}', [TeachersenController::class, 'getSchool']);

# Admin
Route::middleware(['auth'])->group(function () {
    Route::get('alldata/export/', [AdminController::class, 'allDataExport'])->name('allDataExport');

    Route::get('/pData-index', [AdminController::class, 'pData'])->name('pData_index');
    Route::get('/pData-show/{id}', [AdminController::class, 'pDataShow'])->name('pData_show');
    Route::get('principals/export/', [AdminController::class, 'pExport'])->name('pExport');

    Route::get('/cData-index', [AdminController::class, 'cData'])->name('cData_index');
    Route::get('/cData-show/{id}', [AdminController::class, 'cDataShow'])->name('cData_show');
    Route::get('counsellors/export/', [AdminController::class, 'cExport'])->name('cExport');

    Route::get('/tgData-index', [AdminController::class, 'tgData'])->name('tgData_index');
    Route::get('/tgData-show/{id}', [AdminController::class, 'tgDataShow'])->name('tgData_show');
    Route::get('teachers/export/', [AdminController::class, 'tgExport'])->name('tgExport');

    Route::get('/tsData-index', [AdminController::class, 'tsData'])->name('tsData_index');
    Route::get('/tsData-show/{id}', [AdminController::class, 'tsDataShow'])->name('tsData_show');
    Route::get('teachersens/export/', [AdminController::class, 'tsExport'])->name('tsExport');

    Route::get('/sData-index', [AdminController::class, 'sData'])->name('sData_index');
    Route::get('/sData-show/{id}', [AdminController::class, 'sDataShow'])->name('sData_show');
    Route::get('students/export/', [AdminController::class, 'sExport'])->name('sExport');
});

require __DIR__.'/auth.php';
