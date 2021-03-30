<?php
/*Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.Marini Daniel
*/

$array=array();



for ($i=0; $i < 10 ; $i++)
{ 
    $array[$i] = rand(1,100);

    while ($array[$i]%2 ==0)  /*Con esto me aseguro que cargue solamente numeros negativos */
    {
        $array[$i] = rand(1,100);
    }
 
}

echo "<br>";
echo "<br>Los numeros impares son los siguientes: ";


foreach ($array as $key => $numeroAct) {
    while ($numeroAct % 2 != 0) 
    {
        echo "<br>";
        echo "\n El numero es : ",$numeroAct;
        $numeroAct =0;
    }
}


?>