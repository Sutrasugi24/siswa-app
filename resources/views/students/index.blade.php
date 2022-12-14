@extends('templates.default')

@section('content')
<h2 class="intro-y text-lg font-medium mt-10 mb-4">{{ $title ?? 'Data Siswa' }}</h2>
{{-- Alert for function action --}}
@if(session('success'))
    <div class="alert alert-success-soft show flex items-center mb-2" role="alert">
        <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> {{ session('success')}}
    </div>
@endif
@if(session('info'))
    <div class="alert alert-primary-soft show flex items-center mb-2" role="alert">
        <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> {{ session('info')}}
    </div>
@endif
@if(session('danger'))
    <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
        <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ session('danger') }}
    </div>
@endif
{{--END Alert--}}
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="{{ route('students.create') }}" class="btn btn-primary shadow-md mr-2">Tambah Data <i class="w-5 h-5 " data-lucide="plus"></i></a>
        <div class="hidden md:block mx-auto text-slate-500"></div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <form class="w-56 relative text-slate-500" method="get">
                <div class="form-group">
                    <input type="text" name="search" id="search" class="form-control w-56 box pr-10" placeholder="Cari Data..." value="{{ $search }}">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </form>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto w-full ">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    {{-- <th class="whitespace-wrap text-sm text-center">No</th> --}}
                    <th class="whitespace-wrap text-sm text-center">@sortablelink('nama', 'Nama')</th>
                    <th class="whitespace-wrap text-sm text-center">@sortablelink('nis', 'NIS')</th>
                    <th class="whitespace-nowrap text-sm text-center">@sortablelink('nisn', 'NISN')</th>
                    <th class="whitespace-wrap text-sm text-center">@sortablelink('kelas', 'Kelas')</th>
                    <th class="whitespace-wrap text-sm text-center">@sortablelink('tahun', 'Tahun')</th>
                    <th class="whitespace-wrap text-sm text-center">Ijazah</th>
                    <th class="whitespace-wrap text-sm text-center">SKHUN</th>
                    <th class="text-center text-sm whitespace-wrap">@sortablelink('status', 'Status')</th>
                    <th class="whitespace-wrap text-sm text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="intro-x">
                        {{-- <td class="font-medium text-sm text-center">{{ ($students->currentPage()- 1) * $students->perPage() + $loop->iteration }}</td> --}}
                        <td class="font-medium whitespace-nowrap text-sm text-center">{{ $student->nama }}</td>
                        <td class="font-medium whitespace-nowrap text-sm text-center">{{ $student->nis }}</td>
                        <td class="font-medium whitespace-nowrap text-sm text-center">{{ $student->nisn }}</td>
                        <td class="font-medium whitespace-nowrap text-sm text-center">{{ $student->kelas }}</td>
                        <td class="font-medium whitespace-nowrap text-sm text-center">{{ $student->tahun }}</td>
                        <td class="w-auto text-center">
                            <a href="{{ route('students.ijazah', $student->id) }}" title="Lihat data Ijazah!" class="flex whitespace-nowrap justify-center items-center text-success"><i data-lucide="eye" class="w-4 h-4 mr-1"></i></a>
                        </td>
                        <td class="w-auto text-center">
                            <a href="{{ route('students.skhun', $student->id) }}" title="Lihat data SKHUN!" class="flex whitespace-nowrap justify-center items-center text-success"><i data-lucide="eye" class="w-4 h-4 mr-1"></i></a>
                        </td>
                        <td class="w-auto text-center">
                            <div class="flex whitespace-wrap justify-center {{ $student['status'] == 'sudah diambil' ? 'text-success' : 'text-danger' }}">
                                <i data-lucide="{{ $student['status'] == 'sudah diambil' ? 'check-square' : 'x-square' }}" class="items-center w-4 h-4"></i>
                            </div>
                        </td>
                        <td class="table-report__action w-auto">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" title="Ubah data!" href="{{ route('students.edit', $student->id) }}">
                                    <i data-lucide="edit" class="w-4 h-4 mr-1"></i>
                                </a>
                                <button type="button" title="Hapus data!" data-tw-toggle="modal" data-tw-target="#delete-modal-preview-{{$student->id}}" class="btn btn-danger py-1 px-2 mr-2"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                            </div>
                        </td>
                    </tr>

                    <!-- BEGIN: Modal Content -->
<div id="delete-modal-preview-{{$student->id}}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-2">
                <div class="p-5 text-center">
                    <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                    <h3 class="text-slate-700 text-lg font-normal mt-2">Apakah ingin menghapus {{ $student->nama }}?</h3>
                </div>
                <div class="p-6 mb-4 text-center mx-auto">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1 mx-auto">Cancel</button>
                    <form method="POST" class="inline-flex mx-auto" action="{{ route('students.destroy', $student->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-24">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->
                @endforeach
            </tbody>
        </table>
        {{-- @else
            <h4 class="text-center p-3">Tidak ada data Siswa.</h4>
        @endif --}}
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
    <div class="intro-y col-span-12 mx-auto flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <nav class="w-full sm:w-auto sm:mr-auto">
            {!!$students->appends(Request::except('page'))->render()!!}
        </nav>
    </div>
    <!-- END: Pagination -->
</div>


@endsection