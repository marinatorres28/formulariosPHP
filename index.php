<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios en PHP</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <!--En el action indicaremos el archivo que leerá y tratará los datos del formulario-->
    <!--El aributo method indica el metodo de envio-->
    <!--Con get se ve en el navegador los datos que has utilizado-->
    <form action="lectura1.php" method="post">
        <p>
            <label for="nombre">Nombre</label>
    <!--el atributo name es indispensable para que el archivo de lectura lea los datos -->
            <input type="text" name="nombre" id="nombre">
        </p>

        <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido">
        </p>
    <!--todos los campos del formulario deben estar entre la etiqueta form-->
        <p>
            <label for="idioma">Dime tu idioma:</label>
            <input type="radio" name="idioma" id="idioma" value="es">Español
            <input type="radio" name="idioma" id="idioma" value="en">Inglés
            <input type="radio" name="idioma" id="idioma" value="fr">Francés
        </p>

        <p>
            <label for="intereses">Intereses</label>
            <input type="checkbox" name="intereses[]" id="futbol" value="futbol">Futbol
            <input type="checkbox" name="intereses[]" id="natacion" value="natacion">Natacion
            <input type="checkbox" name="intereses[]" id="ballet" value="ballet">Ballet
            <input type="checkbox" name="intereses[]" id="sky" value="sky">Sky

        </p>


    <!--la etiqueta submit activa el formulario y hace el envio-->
        <input type="submit" value="Enviar">
    </form>
    <!--para pasar parametros a traves de una url utilizamos ?-->
    <a href="destino.php?ciudad=Argamasilla">Muestra tu ciudad</a>




</body>
</html>


<?php
