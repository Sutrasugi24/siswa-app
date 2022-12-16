@extends('templates.default')

@section('content')
<div class="intro-y flex items-center mt-12">
    <h2 class="text-lg font-medium mr-auto mb-2">Ubah Data Siswa</h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Input -->
        <form class="intro-y box" action="{{ route('students.update', $student->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                    <!-- Ijazah -->
                    <div class="mb-3">
                        <div class="mb-3">
                        <label class="block mb-2 dark:text-white" for="ijazah">Ijazah</label>
                        <input class="block w-full mb-1 text-sm border border-gray-300 rounded-lg cursor-pointer bg-gray-100 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                        @error('ijazah') is-invalid @enderror"
                        name="ijazah" id="ijazah" type="file" onchange="previewIjazah()">
                        <div class="invalid-feedback">
                        @error('ijazah')
                            {{ $message }}
                        @enderror
                        </div>
                        <p class=" text-xs text-gray-500 dark:text-gray-300" id="file_input_help">PNG atau JPG (MAX. 800x400px).</p>
                        @if($student->ijazah)
                            <img src="{{ asset('storage/'.$student->ijazah) }}" class="img-ijazah max-w-xs h-auto">
                        @else
                            <img class="img-ijazah max-w-xs h-auto">
                        @endif
                        </div>
                    </div>
                    <!-- SKHUN -->
                    <div class="mb-3">
                        <div class="mb-3">
                            <label class="block mb-2 dark:text-white" for="skhun">SKHUN</label>
                            <input class="block w-full mb-1 text-sm border border-gray-300 rounded-lg cursor-pointer bg-gray-100 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                            @error('skhun') is-invalid @enderror" name="skhun" id="skhun" type="file" onchange="previewSkhun()">
                        <div class="invalid-feedback">
                            @error('skhun')
                                {{ $message }}
                            @enderror
                        <p class=" text-xs text-gray-500 dark:text-gray-300" id="file_input_help">PNG atau JPG (MAX. 2Mb).</p>
                        @if($student->skhun)
                            <img src="{{ asset('storage/'.$student->skhun) }}" class="img-skhun max-w-xs h-auto">
                        @else
                            <img class="img-skhun max-w-xs h-auto">
                        @endif
                        </div>
                    </div>

                    <div class="mb-2">
                        <div class="form-group mb-0">
                            <label for="status">Status</label>
                        </div>
                        <div class="form-check inline-block">
                            <input type="radio" name="status" class="form-check-input" value="active" id="active" @if((old('status') ?? $student->status ?? '') == 'active') checked @endif>
                            <label for="active" class="form-check-label">Sudah Diambil</label>
                        </div>
                        <div class="form-check inline-block">
                            <input type="radio" name="status" class="form-check-input" value="inactive" id="inactive" @if((old('status') ?? $student->status ?? '') == 'inactive') checked @endif>
                            <label for="inactive" class="form-check-label">Belum Diambil</label>
                        </div>
                    </div>
                    <br />
                    <div class="form-group text-right">
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

<script>
    function previewIjazah(){
        const ijazah = document.querySelector('#ijazah');
        
        
        const imgPreview= document.querySelector('.img-ijazah')
    
        imgPreview.style.display = 'block';
    
        const oFReader = new FileReader();
        oFReader.readAsDataURL(ijazah.files[0]);
    
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    
    }


    function previewSkhun(){
        const skhun = document.querySelector('#skhun');
        
        
        const imgPreview= document.querySelector('.img-skhun')
    
        imgPreview.style.display = 'block';
    
        const oFReader = new FileReader();
        oFReader.readAsDataURL(skhun.files[0]);
    
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection