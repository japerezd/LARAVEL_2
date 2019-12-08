@extends("layouts.layout")

@section("title","Editar proyecto |".$project->title)

@section("content")
    <h1>Editar proyecto</h1>
    @include('partials.validation-errors')
    
{{-- la accion es projects.update y le pasamos el proyecto con $project --}}
<form action="{{ route('projects.update', $project) }}" method="POST">
    
    {{-- se utiliza method=post por defecto y se utiliza debajo de csrf un metodo para actualizar --}}
    @method("PATCH")

    @include('projects._form',["btnText" => "Actualizar"]) {{-- Nombre del boton se pasa por esa variable btnText a _form --}}
        
    </form>
@endsection

