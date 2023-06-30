<?php

//definimos la clase hija de la clase moto.

class MotoInternacional extends Moto{

    private $paisFabricacion;

    private $impuestosImportacion;



    //definimos el metodo constructor de la clase MotoInternacional, llamando a su padre tambien.
    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncrementoAnual, $activa, $paisFabricacion, $impuestosImportacion){
        
        parent :: __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncrementoAnual, $activa);

        $this->paisFabricacion = $paisFabricacion;
        $this->$impuestosImportacion = $impuestosImportacion;
    }


    //definimos los metodos de acceso de la clase hija, ya que los metodos de acceso de la clase padre ya los tenemos definidos.

    public function getPaisFabricacion(){
        return $this->paisFabricacion;
    }

    public function setPaisFabricacion($paisFabricacion){
        $this->paisFabricacion = $paisFabricacion;
    }


    public function getImpuestosImportacion(){
        return $this->impuestosImportacion;
    }

    public function setImpuestosImportacion($impuestosImportacion){
        $this->impuestosImportacion = $impuestosImportacion;
    }

    
    //definimos el metodo to string.
    public function __toString(){
        $cadena = "Moto Internacional.";
        $cadena = parent :: __toString();
        $cadena = $cadena . "\nPais de fabricacion: " . $this->getPaisFabricacion() . "\nImpuestos para ingresarla al pais: " . $this->getImpuestosImportacion();
        return $cadena;
    }


    public function darPrecioVenta(){
        $precio = parent :: darPrecioVenta();
        $impuestosImportacion = $this->getImpuestosImportacion();
        $precio = $precio + $impuestosImportacion;
        return $precio;
    }

}