<?php
/*Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.
*/

//tener switch de unidades y de decenas
$num = random_int(20, 60);
$numString = (string)$num;

$arrayNumero = str_split($numString);
$decenas = $arrayNumero[0];
$unidades = $arrayNumero[1];



switch ($decenas) {
    case '2':
        # code...
        $decenas = "veinte";
        break;

    case '3':
        # code...
        $decenas = "treinta";
        break;

    case '4':
        # code...
        $decenas = "cuarenta";
        break;

    case '5':
        # code...
        $decenas = "ciencuenta";
        break;

    case '6':
        # code...
        $decenas = "sesenta";
        break;

    default:
        # code...
        break;
}


switch ($unidades) {
    case '1':
        # code...
        $unidades = " y uno";
        break;

    case '2':
        # code...
        $unidades = " y dos";
        break;

    case '3':
        # code...
        $unidades = " y tres";
        break;

    case '4':
        # code...
        $unidades = " y cuatro";
        break;

    case '5':
        # code...
        $unidades = " y cinco";

        break;

    case '6':
        # code...
        $unidades = " y seis";

        break;

    case '7':
        # code...
        $unidades = " y siete";

        break;

    case '8':
        # code...
        $unidades = " y ocho";
        break;

    case '9':
        # code...
        $unidades = " y nueve";
        break;

    default:
        # code...
        break;
}

if ($unidades == 0) {
    echo $decenas;
}else 
{
    echo $decenas . $unidades;
}

?>
	

