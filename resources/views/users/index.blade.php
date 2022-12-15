@extends('templates.default')


@section('content')
<div class="flex mt-[4.7rem] md:mt-0 overflow-hidden">
    <!-- BEGIN: Content -->
    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            Users
        </h2>
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
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                @if(Auth::user()->hasRole('admin'))
                <a href="{{ route('users.create') }}" class="btn btn-primary shadow-md mr-2">Tambah Data <i class="w-5 h-5 " data-lucide="plus"></i></a>
                @endif
                <div class="hidden md:block mx-auto text-slate-500"></div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <form class="w-56 relative text-slate-500" method="get">
                        <div class="form-group">
                            <input type="text" name="search" id="search" class="form-control w-56 box pr-10" placeholder="Cari Data..." value="">
                            <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                        </div>
                    </form>
                </div>
            </div>
            <!-- BEGIN: Users Layout -->
            @foreach ($users as $user)
            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div class="flex flex-col lg:flex-row items-center p-5">
                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                            <img alt="SMAN 6 Cimahi" class="rounded-full" src="dist/images/profile-12.jpg">
                        </div>
                        <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                            <a href="" class="font-medium">{{ $user->name }}</a> 
                            <div class="text-slate-500 text-xs mt-0.5">Software Engineer</div>
                        </div>
                        @if(Auth::user()->hasRole('admin'))
                        <form class="flex mt-4 lg:mt-0" method="POST" action="{{ route('users.destroy', $user->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger py-1 px-2 mr-2"><i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Hapus</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            <!-- BEGIN: Users Layout -->
            <!-- BEGIN: Pagination -->
            <div class="intro-y col-span-12 mx-auto flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                <nav class="w-full sm:w-auto sm:mr-auto">
                    
                </nav>
            </div>
            <!-- END: Pagination -->
        </div>
    </div>
    <!-- END: Content -->
</div>
@endsection
