<?php
/*Aplicación No 8 (Carga aleatoria)
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';Marini Daniel
*/


$vec[1]=90; 
$vec[30]=7; 
$vec['e']=99; 
$vec['hola']= 'mundo';


foreach ($vec as $key => $arrayAct) 
{
    echo"<br/>";
    echo "Se muestran los valores de vectores asociativos: ",$key ," ", $arrayAct;
    
}



?>