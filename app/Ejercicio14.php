<?php
/*Aplicación No 14 (Par e impar)
Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función esImpar.
 Marini Daniel.-
*/

$numero1=rand(1,100);

if (esPar($numero1)) {
    printf("El numero es Par ");
}else {
    printf("El numero es Impar ");
}

function esPar($num){
    if ($num%2== 0) {
        return $return = TRUE;
    }
    else {
        return $return = FALSE;
    }

}

function esImpar($num){
    if ($num%2!= 0) {
        printf("El numero es Impar ");
        $return = TRUE;
    }
    else {
        printf("El numero es Par ");
        $return = FALSE;
    }

}

echo $numero1;

?>
	


