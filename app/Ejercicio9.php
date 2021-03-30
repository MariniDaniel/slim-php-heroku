<?php
/*Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.Marini Daniel
*/

//Llamo a la funcion y asigno a lapicera todos los elementos.
$l1 = Lapicera("Rojo", "Cross", "Fino", 35);
$l2 = Lapicera("Azul", "Faber Castell", "Grueso", 25);
$l3 = Lapicera("Verde", "Fukgi", "Medio", 23.50);


$arrayAsociativo["Lapicera1"] = $l1;
$arrayAsociativo["Lapicera2"] = $l2;
$arrayAsociativo["Lapicera3"] = $l3;



foreach ($arrayAsociativo as $key => $value) {
    printf("$key: <br>");
    MostrarLapicera($value);
    printf("////////////////////////////<br>");
}


function MostrarLapicera($lapicera){
    foreach ($lapicera as $key => $value) {
        printf("$key = $value<br/>");
    }
}

function Lapicera($color, $marca, $trazo, $precio){
    $lapicera['color'] = $color;
    $lapicera['marca'] = $marca;
    $lapicera['trazo'] = $trazo;
    $lapicera['precio'] = $precio;
    return $lapicera;
}


?>