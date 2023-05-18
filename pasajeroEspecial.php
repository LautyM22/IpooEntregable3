<?php

include "pasajero.php";

class PasajeroEspecial extends Pasajero{
    
    private $sillaRuedas;
    private $asistencia;
    private $comidaEspecial;

    public function __construct($nombre, $nAsiento, $nTicket, $sillaRuedas, $asistencia, $comidaEspecial){
        parent::__construct($nombre, $nAsiento, $nTicket);
            $this->sillaRuedas = $sillaRuedas;
            $this->asistencia = $asistencia;
            $this->comidaEspecial = $comidaEspecial;
    }

    public function getSillaRuedas(){
        return $this->sillaRuedas;
    }

    public function setSillaRuedas($sillaRuedas){
        $this->sillaRuedas = $sillaRuedas;
    }

    public function getAsistencia(){
        return $this->asistencia;
    }

    public function setAsistencia($asistencia){
        $this->asistencia = $asistencia;
    }

    public function getComidaEspecial(){
        return $this->comidaEspecial;
    }

    public function setComidaEspecial($comidaEspecial){
        $this->comidaEspecial = $comidaEspecial;
    }

    public function __toString(){
        $cadena = parent::__toString();
        $cadena.= "\n Silla de Ruedas: ".$this->getSillaRuedas().
                  "\n Asistencia: ".$this->getAsistencia().
                  "\n Comida Especial: ".$this->getComidaEspecial();
        return $cadena;
    }
    
}