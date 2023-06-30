<?php

//creamos la clase hija de venta, venta online

//dirección de envío, DNI de quien recepciona la entrega y número de teléfono de contacto. 
//Además hay que tener en cuenta para estas ventas, un costo de transporte que va a afectar al importe total de la venta, produciendo un incremento del un 15%. 


class VentaOnline extends Venta{

    private $direccionEntrega;

    private $dniEntrega;

    private $telefonoEntrega;

    private $incrementoTransporte;


    //definimos el metodo constructor
    public function __construct($numero, $fecha, $objCliente, $colMotos, $direccionEntrega, $dniEntrega, $telefonoEntrega, $incrementoTransporte){
        parent :: __construct($numero, $fecha, $objCliente, $colMotos);

        $this->direccionEntrega = $direccionEntrega;
        $this->dniEntrega = $dniEntrega;
        $this->telefonoEntrega = $telefonoEntrega;
        $incrementoTransporte = 15;
    }

    //definimos los metodos de acceso;

    public function getDireccionEntrega(){
        return $this->direccionEntrega;
    }

    public function setDireccionEntrega($direccionEntrega){
        $this->direccionEntrega = $direccionEntrega;
    }


    public function getDniEntrega(){
        return $this->dniEntrega;
    }

    public function setDniEntrega($dniEntrega){
        $this->dniEntrega = $dniEntrega;
    }


    public function getTelefonoEntrega(){
        return $this->telefonoEntrega;
    }

    public function setTelefonoEntrega($telefonoEntrega){
        $this->telefonoEntrega = $telefonoEntrega;
    }


    public function getIncrementoTransporte(){
        return $this->incrementoTransporte;
    }

    public function setIncrementoTransporte($incrementoTransporte){
        $this->incrementoTransporte = $incrementoTransporte;
    }

    
    public function registrarInformacionVenta($info){
        $direccionEntrega = $info["direccion"];
        $dniEntrega = $info["dni"];
        $telefonoEntrega = $info["telefono"];
        $this->setDireccionEntrega($direccionEntrega);
        $this->setDniEntrega($dniEntrega);
        $this->setTelefonoEntrega($telefonoEntrega);
    }

    public function __toString(){
        $cadena = parent :: __toString();
        $cadena = $cadena . "\nTipo de venta: ON-LINE";
        $cadena = $cadena . "\nDireccion de entrega: " . $this->getDireccionEntrega() . "\nDni de la persona que recibe: " . $this->getDniEntrega() . "\nTelefono de entrega: " . $this->getTelefonoEntrega() . "\nPorcentajede incremento por el transporte: " . $this->getIncrementoTransporte();
        return $cadena;
    }
}