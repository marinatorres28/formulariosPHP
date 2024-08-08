<?php
    if (empty($_POST["nombre"]) || empty($_POST["apellido"])){
        echo "No hay ningun dato";
    }else{
        echo 'Hola, tu nombre es '.$_POST["nombre"].' '.$_POST["apellido"];
    }
    echo "<br>";

    if (empty($_POST["idioma"])){
        echo "No hay ningun idioma";
    } else {
        if ($_POST["idioma"] == "es"){
            echo "Tu idioma es Español";
        }   elseif ($_POST["idioma"] == "en"){
            echo "Tu idioma es Inglés";
        }   elseif ($_POST["idioma"] == "fr"){
        echo "Tu idioma es Francés";
        }
    }

    if (empty($_POST["intereses"])){
        echo "<br>No has seleccionado ningun interes";
    }else{
        echo "<br>Tus intereses son:";
        foreach ($_POST["intereses"] as $intereses) {
            echo "<br>·".$intereses;
        }
    }
    // al asignarle una variable a los campos, se debe hacer si es necesario, porque ocupa un espacio en memoria
    // si se declara variable hay que controlar que pasa si lo recibe vacio
    // var_dump -> muestra tipo y valor de una variable
//    $nombre = $_POST["nombre"];
//    $apellido = $_POST["apellido"];
//    $idioma = $_POST["idioma"];
//    $intereses[] = $_POST["intereses"];

