<?php

class Usuario
{
    private $clave;
    private $nombre;
    private $email;

    function __construct( $clave, $email,$nombre = " ")
    {
        $this->clave=$clave;
        $this->email=$email;
        $this->nombre=$nombre;
    }

    

    function GetClave()
    {
        return $this->clave;
    }
    function GetEmail()
    {
        return $this->email;
    }

    function __toString()
    {
        return "Nombre: ". $this->nombre." "."Clave: ". $this->clave." "."Mail: ". $this->email;
    }

    public function guardarCSV()
    {
        $archivoAux=fopen("usuarios.csv",'a');
        fwrite($archivoAux,"$this->nombre,$this->email,$this->clave".PHP_EOL);
        fclose($archivoAux);
    }
    
    public static function leerCSV($archivoCSV)
    {
        $arrayUsuarios = array();
        $archivo = fopen($archivoCSV,'r');

        while (!(feof($archivo))) 
        {
            $linea =fgets($archivo);
            if (!empty($linea)) 
            {
                array_push($arrayUsuarios,explode(",",$linea));
            }
            
        }
        fclose($archivo);

        return $arrayUsuarios;

    }

    
    public static function listarCSV($array)
    {
        print("<ul>");
            foreach ($array as $usuario) 
            {
                print("<li>$usuario[0]<li>");
                print("<li>$usuario[1]<li>");
                print("<li>$usuario[2]<li>");

            }
        print("</ul>");
    }

    public static function Login($usuarioEntrante,$usuariosCSV)
    {
        $email = $usuarioEntrante->GetEmail();
        $clave = $usuarioEntrante->GetClave();

        $usuariosRegistrados = Usuario::leerCSV($usuariosCSV);

        

        foreach ($usuariosRegistrados as $usuario) 
        {
            if (($usuario[0] == $email) && ($usuario[1]==$clave)) 
            {
                $ret ="Usted Esta Registrado!";
            }
            elseif (($usuario[0]==$email)&& ($usuario[1]!= $clave)) 
            {
                $ret ="Contraseña Incorrecta";
            }
            else 
            {
                $ret ="Usuario No Registrado";
            }

         
            
        }
        return $ret;




    }








}


?>