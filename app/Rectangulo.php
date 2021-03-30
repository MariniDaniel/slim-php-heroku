<?php 

include_once "FiguraGeometrica.php";

class Rectangulo extends FiguraGeometrica
{
    
    private double $_ladoUno;
    private double $_LadoDos;

    function _construct($l1,$l2)
    {
        $this->_ladoUno =$l1;
        $this->_ladoDos =$l2;
        $this->CalcularDatos();
        
    }

    function CalcularDatos()
    {
        $this->_superficie = $this->_ladoUno * $this->_LadoDos;
        $this->_perimetro = ($this->_LadoUno * 2) + ($this->_LadoDos *2);

    }

    function Dibujar()
    {
        for ($i=0; $i < $this->_LadoDos; $i++) { 
            for ($j=0; $j < $this->_ladoUno; $j++) { 
                printf("*");
            }
            echo "<br/>";
        }
    }

      



}








?>