@extends('templates/default')
@section('content')
@if($student->skhun)
    @php
        $img = explode(",", $student->skhun);
    @endphp
    <div class="intro-y box overflow-hidden mt-5">
        <h3 class="text-4xl font-normal leading-normal p-5 mt-5 mb-2 text-primary text-center"> SKHUN {{ $student->nama }}</h3>
        <div class="p-8 flex items-center justify-center">
            @foreach ($img as $key => $item)
                @php
                    $fileUrl = asset('storage/skhun/'. $item);
                @endphp
                @if (strpos($item, '.pdf'))
                    <embed class="w-full h-screen mr-3 ml-3" src="{{ $fileUrl }}" />
                @else
                    <div class="relative">
                        <img class="w-full h-full mr-3 ml-3" src="{{ $fileUrl }}" alt="Tidak ada Gambar" data-action="zoom">
                        <a href="{{ $fileUrl }}" download="{{ $item }}" class="absolute top-0 right-0 p-2 bg-blue-500 text-white text-xs font-bold rounded-lg">Download</a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@else
    <img src="#" alt="Tidak ada gambar">
@endif
@endsection