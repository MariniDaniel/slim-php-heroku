<?php

class Usuario
{
    private $clave;
    private $nombre;
    private $email;
    private $id;
    private $fecha;
    private $rutaArchivo;


    function __construct( $clave, $email,$nombre = "VACIO" ,$rutaArchivo="VACIO",$id=false)
    {
        $this->clave=$clave;
        $this->email=$email;
        $this->nombre=$nombre;
        $this->rutaArchivo=$rutaArchivo;
        $this->fecha = new DateTime("Now");
      
        
        if ($id ==false) 
        {
            $this->id =random_int(1,10000);
        }
        else
        {
            $this->id=$id;    
        }
    }

    
     //setters y getters
    function SetFecha()
    {
        $this->fecha= new DateTime($fecha);
    }
 
    function JsonSerialize()
    {
        return get_object_vars($this);
    }
 
    function GetClave()
    {
        return $this->clave;
    }
    function GetEmail()
    {
        return $this->email;
    }

    public function GetDatos()
    {
        
		return $this->nombre . "," . $this->clave . "," . $this->mail . "," . $this->id . "," . $this->fecha->format("d-m-Y") . "," . "<img src='$this->rutaArchivo' width='280' height='125'/>";
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


    public function Guardar(){

		$retorno = false;

		$archivo = fopen("usuarios.json", "a");

		if($archivo != false){

			$escritura = fwrite($archivo, json_encode($this->JsonSerialize()) . "\n");

			if($escritura != false){
				$retorno = true;
			}

			fclose($archivo);

		}

		return $retorno;
	}

	public static function Leer(){

		$vec = array();
        $auxVec = array();

		$archivo = fopen("usuarios.json", "r");
		

		if($archivo != false){

			while(!feof($archivo)){

				$lectura = fgets($archivo);
                $auxVec = json_decode($lectura, true);
                if($auxVec != null){

                    $usuario = new Usuario($auxVec["clave"], $auxVec["mail"], $auxVec["nombre"], $auxVec["rutaArchivo"], $auxVec["id"]);
                    //print_r($usuario);
                    //echo "<br/>";
                    $usuario->SetFecha($auxVec["fecha"]["date"]);
                    array_push($vec, $usuario);
                }

			
			}

			fclose($archivo);

		}

		return $vec;

	} 

	public static function ImprimirUsuarios($lista){

		foreach($lista as $user)
		{
			echo "<ul>";
            $datos = $user->GetDatos();
            echo "<li>$datos</li>";
			echo "</ul>";
		}

	}

	public static function UsuarioExistente($id)
	{
		$vec = Usuario::Leer();
		$retorno = false;

		foreach($vec as $auxUsuario)
		{
			if($auxUsuario->id == $id)
			{
				$retorno = true;
				break;
			}
		}

		return $retorno;
	}








}


?>