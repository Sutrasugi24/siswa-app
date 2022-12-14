<?php

namespace App\Http\Controllers\Dashboard;

use PDF;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Exports\StudentExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Dashboard\DashboardController;

class DashboardController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentCount = Student::count();
        $studentActive = Student::where('status', 'active')->get()->count();
        $studentInactive = Student::where('status', 'inactive')->get()->count();
        $userCount = User::count();
        return view('dashboard.index', [
            'student_count' => $studentCount,
            'student_active' => $studentActive,
            'student_inactive' => $studentInactive,
            'user_count' => $userCount]);

    }


    public function exportpdf(){
        $data = Student::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('export.students-pdf');
        return $pdf->download('data_siswa.pdf');
    }

    public function exportexcel(){
        return Excel::download(new StudentExport, 'datasiswa.xlsx');
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
