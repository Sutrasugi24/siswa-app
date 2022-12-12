@extends('templates.default')

@section('content')
<div class="intro-y flex items-center mt-12">
    <h2 class="text-lg font-medium mr-auto mb-2">Tambah Data Siswa</h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Input -->
        <form class="box" action="{{ route('students.store') }}" method="post">
        @csrf
            <div id="input" class="p-5">
                <div class="preview">
                    <div class="mt-3">
                        <label for="name" class="form-label">Nama</label>
                        <input id="name" name="nama" type="text" class="form-control
                        @error('nama')
                            is-invalid
                        @enderror" value={{ old('nama')}}>
                        @error('nama')
                            <span class="invalid-feedback sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="nis" class="form-label">Nomor Induk Siswa</label>
                        <input id="nis" name="nis" type="text" class="form-control
                        @error('nis')
                            is-invalid
                        @enderror" value={{ old('nis')}}>
                        @error('nis')
                            <span class="invalid-feedback sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="nisn" class="form-label">Nomor Induk Siswa Nasional</label>
                        <input id="nisn" name="nisn" type="text" class="form-control
                        @error('nisn')
                            is-invalid
                        @enderror" value={{ old('nisn')}}>
                        @error('nisn')
                            <span class="invalid-feedback sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input id="kelas" name="kelas" type="text" class="form-control
                        @error('kelas')
                            is-invalid
                        @enderror" value={{ old('kelas')}}>
                        @error('kelas')
                            <span class="invalid-feedback sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input id="tahun" name="tahun" type="text" class="form-control
                        @error('tahun')
                            is-invalid
                        @enderror" value={{ old('tahun')}}>
                        @error('tahun')
                            <span class="invalid-feedback sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="ijazah" class="form-label">Ijazah</label>
                        <input id="ijazah" name="ijazah" type="text" class="form-control
                        @error('ijazah')
                            is-invalid
                        @enderror" value={{ old('ijazah')}}>
                        @error('ijazah')
                            <span class="invalid-feedback sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <br />
                    <div class='mb-4'>
                        <label for="skhun" class="form-label">SKHUN</label>
                        <input id="skhun" name="skhun" type="text" class="form-control
                        @error('skhun')
                            is-invalid
                        @enderror" value={{ old('skhun')}}>
                        @error('skhun')
                            <span class="invalid-feedback sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <div class="form-group mb-0">
                            <label for="status">Status</label>
                        </div>
                        <div class="form-check inline-block">
                            <input type="radio" name="status" class="form-check-input" value="active" id="active" checked>
                            <label for="active" class="form-check-label">Aktif</label>
                        </div>
                        <div class="form-check inline-block">
                            <input type="radio" name="status" class="form-check-input" value="inactive" id="inactive">
                            <label for="inactive" class="form-check-label">Tidak Aktif</label>
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