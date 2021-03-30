<?php
/*Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.Marini Daniel
*/

//Llamo a la funcion y asigno a lapicera todos los elementos.
$l1 = Lapicera("Rojo", "Cross", "Fino", 35);
$l2 = Lapicera("Azul", "Faber Castell", "Grueso", 25);
$l3 = Lapicera("Verde", "Fukgi", "Medio", 23.50);

$arrayAsociativo["Lapicera1"] = $l1;
$arrayAsociativo["Lapicera2"] = $l2;
$arrayAsociativo["Lapicera3"] = $l3;

$arrayIndexado = [];
array_push($arrayIndexado, $l1,$l2,$l3);

printf("---------------------------------------<br>");
echo "<br>";
echo "<br>Array Asociativo: ";
echo "<br>";
printf("---------------------------------------<br>");
foreach ($arrayIndexado as $key => $value) {
    printf("Indice: $key: <br>");
    MostrarLapicera($value);
    printf("////////////////////////////<br>");
}

printf("---------------------------------------<br>");
echo "<br>";
echo "<br>Array Asociativos: ";
echo "<br>";
printf("---------------------------------------<br>");
foreach ($arrayAsociativo as $key => $value) {
    printf("$key: <br>");
    MostrarLapicera($value);
    printf("////////////////////////////<br>");
}



//Funciones
function MostrarLapicera($lapicera){
    foreach ($lapicera as $key => $value) {
        printf("$key = $value<br/>");
    }
}

function Lapicera($color, $marca, $trazo, $precio){
    $lapicera['Color: '] = $color;
    $lapicera['Marca: '] = $marca;
    $lapicera['Trazo: '] = $trazo;
    $lapicera['Precio: '] = $precio;
    return $lapicera;
}
?>










