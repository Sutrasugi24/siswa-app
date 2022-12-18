@extends('templates/default')


@section('content')
@if($student->skhun)
    @php
        $img = explode (",", $student->skhun)
    @endphp
    @foreach ($img as $key => $item)
        <img class="mb-4" src="{{ asset('storage/skhun/'. $item) }}" alt="Tidak ada Gambar" data-action="zoom">
    @endforeach
@else
    <img src="#" alt="Tidak ada gambar">
@endif
@endsection