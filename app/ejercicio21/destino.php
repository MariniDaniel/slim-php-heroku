<?php       

   /* echo"Array get:";
    var_dump($_GET);
    echo"<br/>Array POST:";
    var_dump($_POST);*/

    include "usuario.php";
    
    $nombre =$_POST["nombre"];
    $clave =$_POST["clave"];
    $email =$_POST["email"];

    

    if((isset($nombre)== true) && (isset($email)== true) && (isset($clave)== true))
    {
        $usuario= new Usuario($nombre,$clave,$email);
        $usuario->guardarCSV();
        echo"Registrado con exito";
    }else
    {
     echo "Faltan cargar datos";
    }

?>