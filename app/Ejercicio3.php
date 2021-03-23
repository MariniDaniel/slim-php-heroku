<?php
/*Aplicación No 3 (Obtener el valor del medio)
Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”*/


// Genero 3 numeros randoms, entre 1 y 10
$a=rand(1,10);
$b=rand(1,10);
$c=rand(1,10);

echo"Los numeros randoms son: $a , $b , $c " ;

//Min y max retornan minimos y maximos de un array.

$min=min($a,$b,$c);
$max=max($a,$b,$c);

if ($a != $min && $a != $max) 
{
    echo"\nEl numero intermedio en esta oportunidad es : $a " ;
    
}
elseif ($b != $min && $b != $max) 
{
    echo"\nEl numero intermedio en esta oportunidad es : $b " ;
    
}
elseif ($c != $min && $c != $max) 
{
    echo"\nEl numero intermedio en esta oportunidad es : $c " ;
}
else 
{
    echo"\nNo hay numero intermedio";
}






?>




