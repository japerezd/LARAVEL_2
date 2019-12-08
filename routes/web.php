<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', "MiControlador@index");

Route::get('/crear', "MiControlador@create");
Route::get('/articulos', "MiControlador@store");
Route::get('/mostrar', "MiControlador@show");

//Usando plantilla blade
Route::get("/contacto","MiControlador@contactar");
Route::get("/galeria","MiControlador@galeria");

/////////////////////////////////////////////////////////////////////////////////
/* Route::get("contactame",function(){ //ejemplo 
    return "Seccion de contactos";
})->name("contactos"); 

//redireccionando ejemplo contactos
Route::get("/",function(){
    echo "<a href=". route('contactos').">Contactos 1</a> <br>";
    echo "<a href=". route('contactos').">Contactos 2</a> <br>";
    echo "<a href=". route('contactos').">Contactos 3</a> <br>";
    echo "<a href=". route('contactos').">Contactos 4</a> <br>";
    echo "<a href=". route('contactos').">Contactos 5</a> <br>";
   
    
}); */

/* Route::get("/",function(){
    $nombre = "Jorge";
    return view("home")->with(["nombre"=>$nombre]); //nombreVariable, valor
})->name("home"); */

Route::view("/","home")->name("home");
Route::view("/about","about")->name("about");

Route::resource('portafolio', 'ProjectController')
->names("projects")
->parameters(["portafolio"=>"project"]);
//Route::view("/portfolio","portfolio",compact("portfolio"))->name("portfolio");
//Route::resource("portfolio","PortfolioController");
//Todas estas son 7 rutas rest
/* Route::get("/portfolio","ProjectController@index")->name("projects.index");
Route::get("/portfolio/crear","ProjectController@create")->name("projects.create"); //esta va antes de portfolio/{project}
Route::get("/portfolio/{project}/editar","ProjectController@edit")->name("projects.edit"); 
Route::patch("/portfolio/{project}","ProjectController@update")->name("projects.update"); 
Route::post("/portfolio","ProjectController@store")->name("projects.store");
Route::get("/portfolio/{project}","ProjectController@show")->name("projects.show");
Route::delete("/portfolio/{project}", "ProjectController@destroy")->name("projects.destroy"); */



Route::view("contact","contact")->name("contact");
//se crea esta ruta para responder al metodo post que tiene contact
Route::post("contact","MessageController@store")->name("ContactPost");

//Route::view("/","home")->("home"); //cuando vaya a la raiz, me mande a home.blade.php
/////////////////////////////////////////////////////////////////////////////////


Auth::routes(["register"=>false]); //con el array dentro, no se tendra el formulario de registro

//Route::get('/home', 'HomeController@index')->name('home');
