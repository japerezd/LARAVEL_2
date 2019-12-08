<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .contenedor{
            background-color: #F00;
            text-align: center;

        }

        .infoGeneral{
            background-color: #00F;
            margin: 200px 0;
            color: #FFF;
        }

        .pie{
            background-color: #FF0;
        }
    
    </style>
</head>


<body>

    <div class="contenedor">
        @yield("cabecera") <!--Secciones. No lleva ;-->

    </div>
    

    <div class="infoGeneral">
        @yield("infoGeneral") <!--Secciones-->
    </div>



    <div class="pie">
        @yield("pie")

        Aquí iría el texto del pie
    
    </div>
</body>
</html>