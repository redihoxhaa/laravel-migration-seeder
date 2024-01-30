@extends('templates.template')

@include('subs.header')

@section('main')
    <img src="{{ Vite::asset('resources/img/cj.jpg') }}" alt="">
    <p>This is the main section of the main page</p>
@endsection

@include('subs.footer')
