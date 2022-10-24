<?php

class Institucion{
    
    private $IDINS;
    private $nombre;
    private $clave;

    public function __construct($IDINS, $nombre, $clave){
        $this->IDINS = $IDINS;
        $this->nombre = $nombre;
        $this->clave = $clave;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getClave(){
        return $this->clave;
    }

    public function getIDINS(){
        return $this->IDINS;
    }


    public function __toString(){

        return "Clase <Usuario>";
    }
}