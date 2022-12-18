@extends('templates/default')


@section('content')
@php
    $img = explode (",", $student->ijazah)
@endphp
@foreach ($img as $key => $item)
   <img src="{{ asset('storage/ijazah/'. $item) }}" alt="">
@endforeach


    {{-- @if($student->ijazah)
        <img src="{{ asset('storage/'.$student->ijazah) }}" alt="{{ $student->ijazah }}" data-action="zoom">
    @else
        <img src="{{ asset('dis/images/food-beverage-1.jpg') }}" alt="Tidak ada gambar">
    @endif --}}
@endsection