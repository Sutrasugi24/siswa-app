@extends('templates.default')

@section('content')
<div class="intro-y flex items-center mt-12">
    <h2 class="text-lg font-medium mr-auto mb-2">Ubah Data Siswa</h2>
</div>
<div class="grid grid-cols-12">
    <div class="intro-y col-span-6 lg:col-span-6">
        <!-- BEGIN: Input -->
        <form class="intro-y box" action="{{ route('students.update', $student->id) }}"
            method="post" enctype="multipart/form-data">
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
                        name=" ijazah[]" id="ijazah" type="file" multiple="true" onchange="previewIjazah()">
                            <div class="invalid-feedback">
                                @error('ijazah')
                                    {{ $message }}
                                @enderror
                            </div>
                            <p class=" text-xs text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG, JPEG, atau PDF (MAX.
                                2Mb).</p>
                            {{-- @if($student->ijazah)
                            <img src="{{ asset('storage/ijazah/'.$student->ijazah) }}"
                            class="img-ijazah max-w-xs h-auto">
                        @else
                            <img class="img-ijazah max-w-xs h-auto">
                            @endif--}}
                        </div>
                    </div>
                    <!-- SKHUN -->
                    <div class="mb-3">
                        <div class="mb-3">
                            <label class="block mb-2 dark:text-white" for="skhun">SKHUN</label>
                            <input class="block w-full mb-1 text-sm border border-gray-300 rounded-lg cursor-pointer bg-gray-100 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
@error('skhun') is-invalid @enderror" name="skhun[]" id="skhun" type="file" multiple="true" onchange="previewSkhun()">
                        <div class=" invalid-feedback">
                            @error('skhun')
                                {{ $message }}
                            @enderror
                            <p class=" text-xs text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG, JPEG, atau PDF (MAX.
                                2Mb).</p>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-group mb-0">
                            <label for="status">Status</label>
                        </div>
                        <div class="form-check inline-block">
                            <input type="radio" name="status" class="form-check-input" value="sudah_diambil" id="sudah_diambil"
                                @if((old('status') ?? $student->status ?? '') == 'sudah_diambil') checked @endif>
                            <label for="sudah_diambil" class="form-check-label">Sudah Diambil</label>
                        </div>
                        <div class="form-check inline-block">
                            <input type="radio" name="status" class="form-check-input" value="belum_diambil" id="belum_diambil"
                                @if((old('status') ?? $student->status ?? '') == 'belum_diambil') checked @endif>
                            <label for="belum_diambil" class="form-check-label">Belum Diambil</label>
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
<div class="intro-y col-span-5 lg:col-span-6 ml-5">
    <div class="hero container max-w-screen-lg mx-auto pb-10">
        <p class="text-primary text-center text-lg mb-2">Ijazah</p>
        @if($student->ijazah)
            @php
                $img = explode (",", $student->ijazah)
            @endphp
            @foreach($img as $key => $item)
                <img src="{{ asset('storage/ijazah/'.$item) }}"
                    class="img-ijazah mx-auto rounded-md mb-4">
            @endforeach
        @else
            <img class="img-ijazah" alt="Tidak ada gambar">
        @endif
    </div>
    <div class="hero container max-w-screen-lg mx-auto pb-10 mb-2">
        <h3 class="text-primary text-center text-lg">SKHUN</h3>
        @if($student->skhun)
            @php
                $img = explode (",", $student->skhun)
            @endphp
            @foreach($img as $key => $item)
                <img src="{{ asset('storage/skhun/'.$item) }}"
                    class="img-skhun mx-auto rounded-md mb-4">
            @endforeach
        @else
            <img class="img-skhun" alt="Tidak ada gambar">
        @endif
    </div>
</div>
</div>

<script>
    function previewIjazah() {
        const ijazah = document.querySelector('#ijazah');


        const imgPreview = document.querySelector('.img-ijazah')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(ijazah.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }


    function previewSkhun() {
        const skhun = document.querySelector('#skhun');


        const imgPreview = document.querySelector('.img-skhun')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(skhun.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection
