<?php
/*Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.*/

$op1 = rand(0,100);
$op2 = rand(0,100);

switch ($operador = rand(1,4)) 
{
    

    case $operador = 1:
        $resultado = $op1 + $op2;
        echo "\n La operacion fue $op1 + $op2 , resultado : $resultado ";

        break;

    case $operador = 2:
        $resultado = $op1 - $op2;
        echo "\n La operacion fue $op1 - $op2 , resultado : $resultado ";

        break;

    case $operador = 3:
        $resultado = $op1 * $op2;
        echo "\n La operacion fue $op1 * $op2 , resultado : $resultado ";

        break;


    case $operador = 4:

        if ($op2 != 0) //Evaluo que no sea 0
        {
            $resultado = $op1 / $op2;
            echo "\n La operacion fue $op1 / $op2 , resultado : $resultado ";
        }
        else 
        {
            echo"\nNo se puede realizar una division por 0";
        }
        break;
    
        
    default:
        echo"\n Logro hacer que explote todo, no se que paso";
        break;
}




?>

