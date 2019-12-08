<!--"nombreCarpeta.nombrePlantilla"-->
@extends("layouts.plantilla") <!--Va a heredar de nuestra plantilla -->

@section("cabecera") <!--Tomamos el yield llamado cabecera de plantilla-->

    <h1>Contacto</h1>

    

@endsection


@section("infoGeneral")
<p>Aquí iría el contenido principal de la página</p>
@endsection

@section("pie")
    <!-- Aquí iría el texto del pie -->
@endsection