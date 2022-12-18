@extends('templates/default')


@section('content')
@if($student->ijazah)
    @php
        $img = explode (",", $student->ijazah)
    @endphp
    @foreach ($img as $key => $item)
        <img class="mb-6" src="{{ asset('storage/ijazah/'. $item) }}" alt="Tidak ada Gambar" data-action="zoom">
    @endforeach
@else
    <img src="#" alt="Tidak ada gambar">
@endif
@endsection