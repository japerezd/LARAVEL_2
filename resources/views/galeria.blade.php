<!--"nombreCarpeta.nombrePlantilla"-->
@extends("layouts.plantilla") <!--Va a heredar de nuestra plantilla -->

@section("cabecera") <!--Tomamos el yield llamado cabecera de plantilla-->

    <h1>Galería</h1>

    

@endsection


@section("infoGeneral")
<p>Aquí iría el contenido principal de la página</p>

<!--En caso de que reciba parámetros, construya la tabla
sino, ponga un texto-->

@if(count($alumnos))
        <table width="50%" border="1">
       <!--Se utiliza as $persona para ir recorriendo el arreglo 1 a 1 -->
            @foreach($alumnos as $persona)
                <tr>
                    <td>
                    <!-- Doble llave es = echo -->
                    {{$persona}}
                    </td>
                </tr>
            @endforeach
        </table>
    @else
    {{"Sin Alumnos"}}
@endif

@endsection

@section("pie")
    <!-- Aquí iría el texto del pie -->
@endsection