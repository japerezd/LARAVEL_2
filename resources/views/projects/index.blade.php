@extends("layouts.layout")
@section("title","Portafolio")

@section("content")

   
    <h1>Portafolio</h1>

    @auth
        <a href="{{route('projects.create')}}">Crear proyecto</a>
    
    @endauth
     
    <ul>
   
    @forelse ($projects as $project)
    {{-- con project automaticamente laravel agarra el id de la base de datos--}}
    <li><a href="{{ route('projects.show',$project) }}"> {{$project->title}} </a></li>
    
    @empty
        <li>No hay proyectos para mostrar </li>
    @endforelse  
        {{$projects->links()}}
    </ul>
@endsection

