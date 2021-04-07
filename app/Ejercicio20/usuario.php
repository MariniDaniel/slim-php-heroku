<?php

class Usuario
{
    public $clave;
    public $nombre;
    public $email;

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
    function GetMail()
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
    
}


?>