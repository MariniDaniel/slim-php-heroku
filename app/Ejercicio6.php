<?php
/*Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.Marini Daniel
*/

$array=array();
$promedio=0;
$resultado;

for ($i=0; $i < 5 ; $i++)
{ 
	$array[$i] = rand(1,10);
    $promedio+=$array[$i];
}

for ($i=0; $i < 5; $i++) 
{ 
    echo "<br>";
    echo "\nLos numeros son : ",$array[$i];
    
}


$resultado = $promedio/5;

if ($resultado > 6) 
{
    echo "<br>";
	echo "\nY el promedio es mayor a 6 , es: ",$resultado;
}else if ($resultado < 6) 
{
    echo "<br>";
	echo "\nY el promedio es menor a 6, es: ",$resultado;
}
else
{
    echo "<br>";
	echo "\nY el promedio es igual a 6 , es: ",$resultado;
}


?>