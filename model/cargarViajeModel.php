<?php


class cargarViajeModel
{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getCamiones(){
        return $this->database->query("SELECT * FROM tractor");
    }

    public function getArrastrados(){
        return $this->database->query("SELECT * FROM arrastrado");
    }

    public function getSupervisores(){
        return $this->database->query("SELECT * FROM supervisor");
    }

    public function getChoferes(){
        return $this->database->query("SELECT * FROM chofer");
    }

    public function cargarViaje(      ){

    }


}