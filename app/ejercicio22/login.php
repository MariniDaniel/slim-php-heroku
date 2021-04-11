<?php
    include "usuario.php";

 
    $email = $_POST["email"];
    $clave = $_POST["clave"];
    

    if ((isset($email)==true)&&(isset($clave)==true))
    {
        $usuario = new Usuario($clave,$email);
        echo Usuario::Login($usuario,"usuarios.csv");

    }
    else 
    {
        echo "No ingreso datos";
    }

?>