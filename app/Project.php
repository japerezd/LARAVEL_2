<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{   
    /* ¿Cómo sabe Eloquent a que tabla debe representar dicho modelo?
    
        utiliza el nombre del modelo Project y lo convierte a minuscula y en plural
        es decir: projects y ese sera la tabla que manejara si no se manejara asi se debe hacer 
        de la siguiente manera

        protected $table = "my_table";
    */
    //CONVENCION PARA CREAR UN MODELO DEBE SER EN SINGULAR Y CON LA PRIMERA LETRA MAYUSCULA
    //projects <- nombre de la tabla que va a utilizar el modelo

    

    //Con fillable es para que actualice los campos que queremos por mas campos que le pasemos.
    // Esto siempre va en el modelo de la BD
   // protected $fillable = ["title","url","description"]; //campos para asignar masivamente
    //protected $guarded = ["id","approved","created_at","updated_at"]; //campos que no quiero asignar masivamente

    // Podemos hacer esto ($guarded = []) siempre y cuando no hagamos lo siguiente en el controlador:
    //Model::create(request()->all());
    protected $guarded = []; //Estamos desprotegidos
    //Sobreescribiendo funcion predefinida en el framework
    public function getRouteKeyName()
    {
        return "url";
    }
}
