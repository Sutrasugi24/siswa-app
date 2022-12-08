@extends('templates.default')

@section('content')
<div class="intro-y flex items-center mt-12">
    <h2 class="text-lg font-medium mr-auto mb-2">Ubah Data Siswa</h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Input -->
        <form class="intro-y box" action="{{ route('students.update', $student->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Siswa</h2>
        </div>
            <div id="input" class="p-5">
                <div class="preview">
                    <div class="mt-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input id="nama" name="nama" type="text" class="form-control" value="{{ $student->nama }}">
                    </div>
                    <div class="mt-3">
                        <label for="nis" class="form-label">Nomor Induk Siswa</label>
                        <input id="nis" name="nis" type="text" class="form-control" value="{{ $student->nis }}">
                    </div>
                    <div class="mt-3">
                        <label for="nisn" class="form-label">Nomor Induk Siswa Nasional</label>
                        <input id="nisn" name="nisn" type="text" class="form-control" value="{{ $student->nisn }}">
                    </div>
                    <div class="mt-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input id="kelas" name="kelas" type="text" class="form-control" value="{{ $student->kelas }}">
                    </div>
                    <div class="mt-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input id="tahun" name="tahun" type="text" class="form-control" value="{{ $student->tahun }}">
                    </div>
                    <div class="mt-3">
                        <label for="ijazah" class="form-label">Ijazah</label>
                        <input id="ijazah" name="ijazah" type="text" class="form-control" value="{{ $student->ijazah }}">
                    </div>
                    <br />
                    <div class='mb-4'>
                        <label for="skhun" class="form-label">SKHUN</label>
                        <input id="skhun" name="skhun" type="text" class="form-control" value="{{ $student->nis }}">
                    </div>

                    <div class="mb-2">
                        <div class="form-group mb-0">
                            <label for="status">Status</label>
                        </div>
                        <div class="form-check inline-block">
                            <input type="radio" name="status" class="form-check-input" value="active" id="active" @if((old('status') ?? $student->status ?? '') == 'active') checked @endif>
                            <label for="active" class="form-check-label">Active</label>
                        </div>
                        <div class="form-check inline-block">
                            <input type="radio" name="status" class="form-check-input" value="inactive" id="inactive" @if((old('status') ?? $student->status ?? '') == 'inactive') checked @endif>
                            <label for="inactive" class="form-check-label">Inactive</label>
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <button type="button" onClick="window.history.back()"
                            class="btn btn-secondary w-24 mr-1 mb-2">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24 mr-1 mb-2 ">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END: Input -->
    </div>   
</div>
@endsection