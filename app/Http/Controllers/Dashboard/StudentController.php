<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

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
            ->paginate(10)->onEachSide(5)->fragment('siswa');
        }else{
            $studentsData = Student::sortable()->paginate(10)->onEachSide(1)->fragment('siswa');
        }

        //$student = Student::sortable()->paginate(5)->onEachSide(1)->fragment('siswa');
        return view('students.index')->with([
            'students' => $studentsData,
            'search' => $search,
        ]);
    }


    public function create()
    {
        return view('students.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => ['required', 'min:3', 'max:30'],
            'nis' => ['required', 'min:5', 'numeric'],
            'nisn' => ['required', 'min:5', 'numeric'],
            'kelas' => ['required', 'min:3',],
            'tahun' => ['required', 'min:4', 'numeric'],
            'ijazah' => 'mimes:jpg,png,jpeg|file|max:3072',
            'skhun' => 'mimes:jpg,png,jpeg|file|max:3072',
            'status' => 'required'

        ],[
            'nama.required' => 'Kolom nama harus diisi.',
            'nis.required' => 'Kolom Nomor Induk Siswa harus diisi.',
            'nisn.required' => 'Kolom Nomor Induk Siswa harus diisi.',
            'kelas.required' => 'Kolom Kelas harus diisi.',
            'tahun.required' => 'Kolom Tahun harus diisi.',
        ]);

        

        if($request->file('ijazah')) {
            $ijazah = $request->file('ijazah')->storeAs('ijazah-skhun', $request->nama.'-ijazah'. '.'.$request->file('ijazah')->extension());
        } else {
            $ijazah = '';
        }


        if($request->file('skhun')) {
            $skhun = $request->file('skhun')->storeAs('ijazah-skhun', $request->nama.'-skhun'. '.'.$request->file('skhun')->extension());
        } else {
            $skhun = '';
        }
        
        $student = new Student();

        $student->nama = $request->nama;
        $student->nis = $request->nis;
        $student->nisn = $request->nisn;
        $student->kelas = $request->kelas;
        $student->tahun = $request->tahun;
        $student->ijazah = $ijazah;
        $student->skhun = $skhun;
        $student->status = $request->status;

        $student->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');

        return redirect()->route('students.index');
    }


    public function ijazah($id)
    {
        $student = Student::find($id);

        return view('students.ijazah',[
            'student' => $student,
        ]);
    }

    public function skhun($id)
    {
        $student = Student::find($id);

        return view('students.skhun',[
            'student' => $student,
        ]);
    }

    public function edit($id)
    {
        
        $student = Student::find($id);

        return view('students.edit',[
            'student' => $student,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => ['required', 'min:3', 'max:30'],
            'nis' => ['required', 'min:5', 'numeric'],
            'nisn' => ['required', 'min:5', 'numeric'],
            'kelas' => ['required', 'min:3',],
            'tahun' => ['required', 'min:4', 'numeric'],
            'ijazah' => 'mimes:jpg,png,jpeg|file|max:3072',
            'skhun' => 'mimes:jpg,png,jpeg|file|max:3072',
            'status' => 'required'

        ],[
            'nama.required' => 'Kolom nama harus diisi.',
            'nis.required' => 'Kolom Nomor Induk Siswa harus diisi.',
            'nisn.required' => 'Kolom Nomor Induk Siswa harus diisi.',
            'kelas.required' => 'Kolom Kelas harus diisi.',
            'tahun.required' => 'Kolom Tahun harus diisi.',
        ]);

        $student = Student::find($id);

        if($request->file('ijazah')) {
            $ijazah = $request->file('ijazah')->storeAs('ijazah-skhun', $request->nama.'-ijazah'. '.'.$request->file('ijazah')->extension());
        } else{
            $ijazah = $student->ijazah;
        }


        if($request->file('skhun')) {
            $skhun = $request->file('skhun')->storeAs('ijazah-skhun', $request->nama.'-skhun'. '.'.$request->file('skhun')->extension());
        } else{
            $skhun = $student->skhun;
        }

        $student->nama = $request->nama;
        $student->nis = $request->nis;
        $student->nisn = $request->nisn;
        $student->kelas = $request->kelas;
        $student->tahun = $request->tahun;
        $student->ijazah = $ijazah;
        $student->skhun = $skhun;
        $student->status = $request->status;

        $student->save();

        session()->flash('info', 'Data Berhasil Diperbarui');

        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $pathIjazah = $student->ijazah;
        $pathSkhun = $student->skhun;

        if($pathIjazah != null || $pathIjazah != ''){
            Storage::delete($pathIjazah);
        }

        if($pathSkhun != null || $pathSkhun != ''){
            Storage::delete($pathSkhun);
        }

        $student->delete();

        session()->flash('danger', 'Data Berhasil Dihapus');

        return redirect()->route('students.index');
    }

    
}
