<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class StudentController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        if(!empty($search)){
            $studentsData = Student::sortable()
            ->where('students.nama', 'like', '%'.$search.'%')
            ->orWhere('students.nis', 'like', '%'.$search.'%')
            ->orWhere('students.nisn', 'like', '%'.$search.'%')
            ->orWhere('students.kelas', 'like', '%'.$search.'%')
            ->orWhere('students.tahun', 'like', '%'.$search.'%')
            ->orWhere('students.ijazah', 'like', '%'.$search.'%')
            ->orWhere('students.skhun', 'like', '%'.$search.'%')
            ->paginate(1)->onEachSide(5)->fragment('siswa');
        }else{
            $studentsData = Student::sortable()->paginate(5)->onEachSide(1)->fragment('siswa');
        }

        //$student = Student::sortable()->paginate(5)->onEachSide(1)->fragment('siswa');
        return view('students.index')->with([
            'students' => $studentsData,
            'search' => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => ['required', 'min:3', 'max:30'],
            'nis' => ['required', 'min:5', 'numeric'],
            'nisn' => ['required', 'min:5', 'numeric'],
            'kelas' => ['required', 'min:3',],
            'tahun' => ['required', 'min:4', 'numeric'],
            'ijazah' => ['required', 'min:5'],
            'skhun' => ['required', 'min:5'],

        ],[
            'nama.required' => 'Kolom nama harus diisi.',
            'nis.required' => 'Kolom Nomor Induk Siswa harus diisi.',
            'nisn.required' => 'Kolom Nomor Induk Siswa harus diisi.',
            'kelas.required' => 'Kolom Kelas harus diisi.',
            'tahun.required' => 'Kolom Tahun harus diisi.',
            'ijazah.required' =>'Kolom Ijazah harus diisi.',
            'skhun.required' => 'Kolom SKHUN harus diisi.',
        ]);

        $student = new Student();

        $student->nama = $request->nama;
        $student->nis = $request->nis;
        $student->nisn = $request->nisn;
        $student->kelas = $request->kelas;
        $student->tahun = $request->tahun;
        $student->ijazah = $request->ijazah;
        $student->skhun = $request->skhun;
        $student->status = $request->status;

        $student->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');

        return redirect()->route('students.index');
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
        $student = Student::find($id);

        return view('students.edit',[
            'student' => $student,
        ]);
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
        $student = Student::find($id);

        $student->nama = $request->nama;
        $student->nis = $request->nis;
        $student->nisn = $request->nisn;
        $student->kelas = $request->kelas;
        $student->tahun = $request->tahun;
        $student->ijazah = $request->ijazah;
        $student->skhun = $request->skhun;
        $student->status = $request->status;

        $student->save();

        session()->flash('info', 'Data Berhasil Diperbarui');

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        $student->delete();

        session()->flash('danger', 'Data Berhasil Dihapus');

        return redirect()->route('students.index');
    }

    
}
