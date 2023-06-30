<?php

//creamos la clase hija de venta, venta local.

//almacenar  un día y  horario para coordinar la entrega  de la/s moto/s,
// ese día el sector de administración va a contar con toda la documentación lista para otorgar al cliente.

class VentaLocal extends Venta{

    private $diaRetiro;

    private $horarioRetiro;

    //creamos el metodo constructor.
    public function __construct($numero, $fecha, $objCliente, $colMotos, $diaRetiro, $horarioRetiro){
        parent :: __construct($numero, $fecha, $objCliente, $colMotos);

        $this->diaRetiro = $diaRetiro;
        $this->horarioRetiro = $horarioRetiro;
    }

    //metodos de acceso.

    public function getDiaRetiro(){
        return $this->diaRetiro;
    }

    public function setDiaRetiro($diaRetiro){
        $this->diaRetiro = $diaRetiro;
    }


    public function getHorarioRetiro(){
        return $this->horarioRetiro;
    }

    public function setHorarioRetiro($horarioRetiro){
        $this->horarioRetiro = $horarioRetiro;       
    }

    //lo hago en las clases hijas porque la clase venta no tiene informacion que deba ser seteada.
    //recibe por parametro un arreglo asociativo con la informacion de la venta para registrarla.
    public function registrarInformacionVenta($info){
        $diaRetiro = $info["dia"];  
        $horarioRetiro = $info["horario"];
        $this->setDiaRetiro($diaRetiro);
        $this->setHorarioRetiro($horarioRetiro);
    }

    public function __toString(){
        $cadena = parent :: __toString();
        $cadena = $cadena . "\nTipo de venta: Retiro en local";
        $cadena = $cadena . "\nDia de retiro: " . $this->getDiaRetiro() . "\nHorario de entrega: " . $this->getHorarioRetiro();
        return $cadena;
    }
}