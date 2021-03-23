<?php
/*Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.*/

date_default_timezone_set("America/Argentina/Buenos_Aires"); 
	
	$fecha1 = date("j, n, Y");
	$fecha2 = date("F j, Y, g:i a");   
	$fecha3 = date("m.d.y");                      
	$fecha4 = date("Y/m/d");
	$mes = date("m");                          
	
	echo "fecha1: ", $fecha1;
	echo "\nfecha2: ", $fecha2;
	echo "\nfecha3: ", $fecha3;
	echo "\nfecha4: ", $fecha4;
	 
	switch ($mes) 
	{
	    
		case '12':
		case '01':
		case '02':
		case '03':
		echo "\nEs Verano";
			break;
			
		case '04':
		case '05':
		case '06':
		echo "\nEs Otoño";
			break;
			
		case '07':
		case '08':
		case '09':
		echo "\nEs Invierno";
			break;
			
		case '10':
		case '11':
		echo "\nEs Primavera";
			break;
			
	}


?>

