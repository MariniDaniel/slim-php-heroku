<?php

include_once "FiguraGeometrica.php";


class Triangulo extends FiguraGeometrica
{

    private double $_altura;
    private double $_base;

    function __construct($b,$h)
    {
        $this->_altura = $h;
        $this->_base = $b;
        $this->CalcularDatos();
    }

    protected function CalcularDatos()
    {
        $this->_superficie = ($this->base * $this->_altura)/2;
        $this->_perimetro = ($this->altura * 2)+ $this->base;

    }
    //devuelve repetat el input repetido x veces.
    function Dibujar()
    {
        for ($i=0; $i < $this->_altura; $i++) { 
            echo str_repeat("*",$i+1);
        }
    }


}























?>