<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('students.index', [
        //     'students' => Student::get(),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nama' => ['required', 'min:3'],
        //     'nis' => ['required', 'min:5', 'numeric'],
        //     'nisn' => ['required', 'min:5','numeric'],
        //     'kelas' => ['required', 'min:3'],
        //     'tahun' => ['required', 'min:4', 'numeric'],
        //     'ijazah' => ['required', 'min:5'],
        //     'skhun' => ['required', 'min:5'],

        // ],[
        //     'nama.required' => 'Kolom nama harus diisi.',
        //     'nis.required' => 'Kolom Nomor Induk Siswa harus diisi.',
        //     'nisn.required' => 'Kolom Nomor Induk Siswa harus diisi.',
        //     'kelas.required' => 'Kolom Kelas harus diisi.',
        //     'tahun.required' => 'Kolom Tahun harus diisi.',
        //     'ijazah.required' =>'Kolom Ijazah harus diisi.',
        //     'skhun.required' => 'Kolom SKHUN harus diisi.',
        // ]);

        // $student = new Student();

        // $student->nama = $request->nama;
        // $student->nis = $request->nis;
        // $student->nisn = $request->nisn;
        // $student->kelas = $request->kelas;
        // $student->tahun = $request->tahun;
        // $student->ijazah = $request->ijazah;
        // $student->skhun = $request->skhun;
        // $student->status = $request->status;

        // $student->save();

        // session()->flash('success', 'Data Berhasil Ditambahkan');

        // return redirect()->route('students.index');
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
        // $student = Student::find($id);

        // return view('students.edit',[
        //     'student' => $student,
        // ]);
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
        // $student = Student::find($id);


        // $student->nama = $request->nama;
        // $student->nis = $request->nis;
        // $student->nisn = $request->nisn;
        // $student->kelas = $request->kelas;
        // $student->tahun = $request->tahun;
        // $student->ijazah = $request->ijazah;
        // $student->skhun = $request->skhun;
        // $student->status = $request->status;

        // $student->save();

        // session()->flash('info', 'Data Berhasil Diperbarui');

        // return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $student = Student::find($id);

        // $student->delete();

        // session()->flash('danger', 'Data Berhasil Dihapus');

        // return redirect()->route('students.index');
    }
}
