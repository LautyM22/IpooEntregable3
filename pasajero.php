<?php

class Pasajero{
    private $nombre;
    private $nAsiento;
    private $nTicket;

    public function __construct($nombre, $nAsiento, $nTicket){
        $this->nombre = $nombre;
        $this->nAsiento = $nAsiento;
        $this->nTicket = $nTicket;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNAsiento(){
        return $this->nAsiento;
    }

    public function setNAsiento($nAsiento){
        $this->nAsiento = $nAsiento;
    }

    public function getNTicket(){
        return $this->nTicket;
    }

    public function setNTicket($nTicket){
        $this->nTicket = $nTicket;
    }

    public function __toString(){
        return " Nombre: ".$this->getNombre().
                "\n N° Asiento: ".$this->getNAsiento().
                "\n N° Ticket: ".$this->getNTicket();
    }
    
}

?>