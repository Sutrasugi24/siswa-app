<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Student;
use Illuminate\Support\Str;
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
            'tahun' => ['required', 'numeric'],
            //'ijazah' => 'file|image|mimes:jpg,png,jpeg,pdf|max:2048',
            //'skhun' => 'mimes:jpg,png,jpeg,pdf|max:2048',
            'status' => 'required'

        ],[
            'nama.required' => 'Kolom nama harus diisi.',
            'nama.min' => 'Kolom nama tidak boleh kurang dari 3 karakter.',
            'nama.max' => 'Kolom nama tidak boleh lebih dari 30 karakter.',
            'nis.required' => 'Kolom Nomor Induk Siswa harus diisi.',
            'nis.min' => 'Kolom Nomor Induk Siswa tidak boleh kurang dari 5 angka.',
            'nis.numeric' => 'Kolom NISN harus angka',
            'nisn.required' => 'Kolom Nomor Induk Siswa harus diisi.',
            'nisn.min' => 'Kolom Nomor Induk Siswa tidak boleh kurang dari 5 angka.',
            'nisn.numeric' => 'Kolom NISN harus angka',
            'ijazah.max' => 'File ijazah tidak boleh lebih dari 2 Mb.',
            'skhun.max' => 'File SKHUN tidak boleh lebih dari 2 Mb.',
            'kelas.required' => 'Kolom Kelas harus diisi.',
            'kelas.min' => 'Kolom kelas tidak boleh kurang dari 3 karakter.',
            'tahun.required' => 'Kolom Tahun harus diisi.',
            'tahun.numeric' => 'Kolom Tahun harus angka.',
            'tahun.max' => 'Kolom tahun tidak boleh lebih dari 4 angka.',
        ]);

        if($request->hasfile('ijazah')) {
            foreach($request->file('ijazah') as $ijazah)
            {
                $nameIjazah = Str::random(20). "." . $ijazah->getClientOriginalExtension();
                $ijazah->move(public_path().'/storage/ijazah/', $nameIjazah);  
                $ijazahPath[] = $nameIjazah;
                $ijazah = collect($ijazahPath)->implode(',');
            }

        } else {
            $ijazah = '';
        }

        if($request->hasfile('skhun')){
            foreach($request->file('skhun') as $skhun)
            {
                $nameSkhun = Str::random(20). "." . $skhun->getClientOriginalExtension();
                $skhun->move(public_path().'/storage/skhun/', $nameSkhun);  
                $skhunPath[] = $nameSkhun;
                $skhun = collect($skhunPath)->implode(',');
            }
        } else{
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
            'tahun' => ['required', 'min:4', 'max:4', 'numeric'],
            'ijazah' => 'max:2048',
            'skhun' => 'max:2048',
            'status' => 'required'

        ],[
            'nama.required' => 'Kolom nama harus diisi.',
            'nama.min' => 'Kolom nama tidak boleh kurang dari 3 karakter.',
            'nama.max' => 'Kolom nama tidak boleh lebih dari 30 karakter.',
            'nis.required' => 'Kolom Nomor Induk Siswa harus diisi.',
            'nis.min' => 'Kolom Nomor Induk Siswa tidak boleh kurang dari 5 angka.',
            'nis.numeric' => 'Kolom NISN harus angka',
            'nisn.required' => 'Kolom Nomor Induk Siswa harus diisi.',
            'nisn.min' => 'Kolom Nomor Induk Siswa tidak boleh kurang dari 5 angka.',
            'nisn.numeric' => 'Kolom NISN harus angka',
            'ijazah.max' => 'File ijazah tidak boleh lebih dari 2 Mb.',
            'skhun.max' => 'File SKHUN tidak boleh lebih dari 2 Mb.',
            'kelas.required' => 'Kolom Kelas harus diisi.',
            'kelas.min' => 'Kolom kelas tidak boleh kurang dari 3 karakter.',
            'tahun.required' => 'Kolom Tahun harus diisi.',
            'tahun.numeric' => 'Kolom Tahun harus angka.',
            'tahun.min' => 'Kolom Tahun tidak boleh kurang dari 4 angka.',
            'tahun.max' => 'Kolom tahun tidak boleh lebih dari 4 angka.',
        ]);

        $student = Student::find($id);

        if($request->hasfile('ijazah')) {
            foreach($request->file('ijazah') as $ijazah)
            {
                $nameIjazah = Str::random(20). "." . $ijazah->getClientOriginalExtension();
                $ijazah->move(public_path().'/storage/ijazah/', $nameIjazah);  
                $ijazahPath[] = $nameIjazah;
                $ijazah = collect($ijazahPath)->implode(',');
            }

        } else {
            $ijazah = $student->ijazah;
        }

        if($request->hasfile('skhun')){
            foreach($request->file('skhun') as $skhun)
            {
                $nameSkhun = Str::random(20). "." . $skhun->getClientOriginalExtension();
                $skhun->move(public_path().'/storage/skhun/', $nameSkhun);  
                $skhunPath[] = $nameSkhun;
                $skhun = collect($skhunPath)->implode(',');
            }
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
            $img = explode (",", $student->ijazah);
            foreach($img as $key => $item){
                Storage::delete('ijazah/'. $item);
            }
        }

        if($pathSkhun != null || $pathSkhun != ''){
            $img = explode (",", $student->skhun);
            foreach($img as $key => $item){
                Storage::delete('skhun/'. $item);
            }
        }

        // if($pathSkhun != null || $pathSkhun != ''){
        //     Storage::delete($pathSkhun);
        // }

        $student->delete();

        session()->flash('danger', 'Data Berhasil Dihapus');

        return redirect()->route('students.index');
    }

    
}
