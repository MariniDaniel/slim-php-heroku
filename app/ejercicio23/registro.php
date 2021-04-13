<?php

    include "usuario.php";

    if(isset($_POST["nombre"]) && isset($_POST["clave"]) && isset($_POST["mail"]) && $_FILES["foto"]["error"] == 0){

        //var_dump($_FILES);

    	$destino = "usuario/fotos/" . $_FILES["foto"]["name"];
        move_uploaded_file($_FILES["foto"]["tmp_name"], $destino);
    
        $user = new Usuario($_POST["nombre"], $_POST["clave"], $_POST["mail"], $destino);

        $datos = json_encode($user);

    
        if($user->Guardar($datos))
        {

		    echo "Datos cargados correctamente";

        } else 
        {

		    echo "Error al intentar procesar el archivo";
	    }
    

    } 
    else 
    {

	    echo "Error en la carga de parametros";
    }
?>