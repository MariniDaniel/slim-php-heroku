<?php
/*Aplicación No 1 (Sumar números)
 Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
 supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
 
 Marini Daniel.-
*/


	$resultado=0;
	
	for ($i = 0; $resultado + $i <= 1000 ; $i++) 
	{
	    $resultado = $i + $resultado ;
	    
	    $cantidadSumada= $i;
	}
	
	echo"Cantidad de numeros sumados: ",$cantidadSumada;
	
	echo"\nEl total es : ",$resultado;
	
?>
	


