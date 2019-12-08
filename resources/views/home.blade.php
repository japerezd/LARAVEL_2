@extends("layouts.layout")

@section("title","Home")
    
@section("content")
    <h1>Home</h1>
    @auth
        {{-- Lo que este dentro de esta directiva solo se va a ejecutar si existe un usuario
            autenticado--}}

        {{-- Accediendo al usuario autenticado, una vez que hicimos login --}}
        {{ auth()->user()->name }}

     @endauth
@endsection

