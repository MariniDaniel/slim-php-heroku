<?php

    include "usuario.php";
    
    $listado = $_GET["listado"];

    $estado="OK";

    if (isset($listado)==true)
    {
        switch($listado)
        {
            case 'usuarios':
                $arrayUsuarios = Usuario::leerCSV("usuarios.csv");
                echo Usuario:: listarCSV($arrayUsuarios);

            break;

            default:
            $estado="ERROR";
            break;
        }

        if ($estado == "ERROR")
        {
             echo"No existe un listado .csv";
        }
    }
    else
    {
        echo "No se cargaron parametros";
    }


?>