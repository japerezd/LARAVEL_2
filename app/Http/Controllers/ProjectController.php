<?php

namespace App\Http\Controllers;


use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __construct()
    {
       // $this->middleware("auth")->only("create","edit"); metodo create y edit protegido por usuario y contraseña
        $this->middleware("auth")->except("index","show"); //index y show se podran ver sin contraseña y user, los demas no
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //interactuando con la bd con query builder
        //$portfolio = DB::table('projects')->get();
        //$portfolio = Project::latest('updated_at')->get();
        //$projects = Project::latest('updated_at')->paginate(); //por defecto son 15 paginas
        return view("projects.index", [
            //projects es el nombre de la tabla
            "projects" => Project::latest()->paginate() //este objeto lo manda hacia la vista portfolio
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project) //Haciendo uso del Route Model Binding
    {
        //El $project antes era $id, por lo tanto se debe cambiar en la ruta en web.php
        //return $id;

        //metodo findOrFail es para que falle en el momento en el que no encuentre el $id que le pasemos 
        //$project = Project::findOrFail($id) ; //metodo find para encontrar un registro con su identificador

        return view("projects.show", [
            //haciendo uso del Route Model Binding
            "project" => $project //con esto ya tenemos acceso a show.blade con la variable project
        ]);
    }

    public function create()
    {
        return view("projects.create",[
            "project" => new Project //pasamos un proyecto vacio al create
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        /*  $title = request("title");
        $url = request("url");
        $descripcion = request("description"); */

        /* Project::create([
            "title"=>request("title"),
            "url"=>request("url"),
            "description"=>request("description"),
        ]); */
        //2. Otra forma para controlar asignacion masiva
        /*  $fields = request()->validate([
            "title"=>"required",
            "url"=>"required",
            "description"=>"required",
        ]); */
        //2. Forma para protegernos de asignacion masiva 
        //Project::create($fields);
        //1. esta es una forma para controlar la asignacion masiva
        // Project::create(request()->only("title","url","description")); //protegido contra asignacion masiva, si guarded = []

        Project::create($request->validated()); //<- utilizando un form request
        return redirect()->route("projects.index")->with("status","El proyecto fue creado con éxito. ");
    }

    //metodo edit recibiendo el proyecto como parametro de la url al igual que en metodo show
    public function edit(Project $project)
    {
        return view("projects.edit", [
            "project" => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)    
    {
        //actualizando utilizando ELOQUENT
       /*  $project->update([
            "title" => request("title"),
            "url" => request("url"),
            "description" => request("description"),
        ]); */

        //utilizando Route Model Binding
        $project->update( $request->validated() );
        //Devolviendo una respuesta
        return redirect()->route("projects.show",$project)->with("status","El proyecto fue actualizado con éxito. ");
    }

    public function destroy(Project $project)
    {
        $project->delete(); //eliminando registro en la bd
        return redirect()->route("projects.index")->with("status","El proyecto fue eliminado con éxito. ");
    }
}
