@extends('templates/default')


@section('content')
    @if($student->skhun)
        <img src="{{ asset('storage/'.$student->skhun) }}" alt="{{ $student->skhun }}">
    @else
        <img src="{{ asset('dis/images/food-beverage-1.jpg') }}" alt="Tidak ada gambar">
    @endif
@endsection