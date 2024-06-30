@extends('templates/default')

@section('content')
@if($student->ijazah)
    @php
        $img = explode(",", $student->ijazah);
    @endphp
    <div class="intro-y box overflow-hidden mt-5">
        <h3 class="text-4xl font-normal leading-normal p-5 mt-5 mb-2 text-primary text-center"> Ijazah {{ $student->nama }}</h3>
        <div class="p-8 flex items-center justify-center">
            @foreach ($img as $key => $item)
                @if(strpos($item, '.pdf'))
                    <div class="relative w-full h-screen mr-3 ml-3">
                        <embed class="w-full h-full" src="{{ asset('storage/ijazah/'. $item) }}" />
                        <a href="{{ asset('storage/ijazah/'. $item) }}" download class="absolute top-0 right-0 p-2 bg-blue-500 text-white text-xs font-bold rounded-lg">Download</a>
                    </div>
                @else
                    <div class="relative w-full h-full mr-3 ml-3">
                        <img class="w-full h-full" src="{{ asset('storage/ijazah/'. $item) }}" alt="Tidak ada Gambar" data-action="zoom">
                        <a href="{{ asset('storage/ijazah/'. $item) }}" download class="absolute top-0 right-0 p-2 bg-blue-500 text-white text-xs font-bold rounded-lg">Download</a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@else
    <img src="#" alt="Tidak ada gambar">
@endif
@endsection
