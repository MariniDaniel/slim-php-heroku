<?php


abstract class FiguraGeometrica
{

    //atributos protegidos
    protected string $_color;
        protected double $_perimetro;
        protected double $_superficie;

    //constructor por defecto
    function _construct()
    {

    }


    //Setter y getter
    function GetColor():string
    {
        return $this->_color;
    }

    function SetColor(string $color)
    {
        $this->_color = $color;
    }

    //Metodo abstractos
    abstract function Dibujar(); 

    abstract protected function CalcularDatos();

    function ToString()
    {
        echo "Superficie: ", $this->_superficie, "<br/>";
        echo "Perimetro: ", $this->_perimetro, "<br/>";
        echo "Color: ", $this->_color, "<br/>";
        echo"<br/>";

        $this->Dibujar();

    }

}



?>