@extends('layouts.main')

@section('title', 'Welcome')

@section('content')

    {{-- Aqui é um comentario do Blade que não vai aparecer e nem aparecer no inspecionar --}}

    <h1>Página Welcome</h1>
    <br/>

    <span>
        {{ $welcome }} <i>{{ $nome }}</i>
    <span>

@endsection
