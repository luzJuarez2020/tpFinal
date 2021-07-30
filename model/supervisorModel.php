<?php


class supervisorModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }


    public function getViajesActivos(){
        return $this->database->query("SELECT * FROM viaje WHERE estado='ACTIVO'");
    }


    public function getViajesProximos(){
        return $this->database->query("SELECT * FROM viaje WHERE estado='PENDIENTE' ORDER BY fecha_salida_previsto asc ");
    }





}