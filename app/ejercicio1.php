<?php
/*
Rivola Josias
Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.
*/

$l1 = Lapicera("Rojo", "marca1", "Fino", 12.3);
$l2 = Lapicera("Azul", "marca2", "Grueso", 30);
$l3 = Lapicera("Negro", "marca5", "Medio", 15.15);

$arrayAsociativo["Lapicera1"] = $l1;
$arrayAsociativo["Lapicera2"] = $l2;
$arrayAsociativo["Lapicera3"] = $l3;

$arrayIndexado = [];
array_push($arrayIndexado, $l1,$l2,$l3);

printf("INDEXADO<br>");
foreach ($arrayIndexado as $key => $value) {
    printf("Indice: $key: <br>");
    MostrarLapicera($value);
    printf("////////////////////////////<br>");
}

printf("ASOCIATIVO<br>");
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