@extends('templates/default')


@section('content')
    @if($student->ijazah)
        <img src="{{ asset('storage/'.$student->ijazah) }}" alt="{{ $student->ijazah }}" data-action="zoom">
    @else
        <img src="{{ asset('dis/images/food-beverage-1.jpg') }}" alt="Tidak ada gambar">
    @endif
@endsection