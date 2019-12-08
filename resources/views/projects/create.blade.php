@extends("layouts.layout")

@section("title","Crear proyecto")

@section("content")
    <h1>Crear nuevo proyecto</h1>

    @include('partials.validation-errors')
    
<form action="{{ route('projects.store') }}" method="POST">
 

       {{-- incluyendo archivo _form --}}
    @include('projects._form',["btnText" => "Guardar"]) {{-- Se esta pasando el nombre del boton al form --}}

        
    </form>
@endsection

