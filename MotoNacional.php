<?php

//Definimos la otra clase hija MotoNacional de la clase padre Moto.

class MotoNacional extends Moto{

    private $porcentajeDescuento;


    //implementamos el metodo constructor de la clase
    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncrementoAnual, $activa, $porcentajeDescuento){
        
        parent :: __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncrementoAnual, $activa);

        $this->porcentajeDescuento = $porcentajeDescuento;
    }
    

    //metodos de acceso...
    public function getPorcentajeDescuento(){
        return $this->porcentajeDescuento;
    }

    public function setPorcentajeDescuento($porcentajeDescuento){
        $this->porcentajeDescuento = $porcentajeDescuento;
    }


    //metodo to string...
    public function __toString(){
        $cadena = "Moto Nacional.";
        $cadena .= parent :: __toString();
        $cadena = $cadena . "\nPorcentaje de descuento: " . $this->getPorcentajeDescuento();

        return $cadena;
    }

    public function darPrecioVenta(){
        $precio = parent :: darPrecioVenta();
        $porcentajeDescuento = $this->getPorcentajeDescuento();
        $porcentajeDescuento = ($precio * $porcentajeDescuento)/100;
        $precio = $precio + $porcentajeDescuento;
        return $precio;
    }
}