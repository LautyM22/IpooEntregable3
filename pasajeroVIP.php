<?php

include "pasajero.php";

class PasajeroVIP extends Pasajero{
    
    private $nViajero;
    private $cantMillas;

    public function __construct($nombre, $nAsiento, $nTicket, $nViajero, $cantMillas){
        parent::__construct($nombre, $nAsiento, $nTicket);
            $this->nViajero = $nViajero;
            $this->cantMillas = $cantMillas;
    }

    public function getNViajero(){
        return $this->nViajero;
    }

    public function setNViajero($nViajero){
        $this->nViajero = $nViajero;
    }

    public function getCantMillas(){
        return $this->cantMillas;
    }

    public function setCantMillas($cantMillas){
        $this->cantMillas = $cantMillas;
    }

    public function __toString(){
        $cadena = parent::__toString();
        $cadena.= "\n N° Viajero: ".$this->getNViajero().
                  "\n Cant Millas: ".$this->getCantMillas();
        return $cadena;
    }
    
}

?>