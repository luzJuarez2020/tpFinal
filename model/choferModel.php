<?php


class choferModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getIdChofer($dni) {
        $sql="SELECT id FROM chofer WHERE chofer.dni_usuario='$dni'";
        $chofer=$this->database->queryNum($sql);
        $id=$chofer[0];
        return $id;
    }

    public function getViajeActual($dni){
        $id=$this->getIdChofer($dni);
        return $this->database->query("SELECT * FROM viaje WHERE viaje.id_chofer='$id' and estado='ACTIVO'");
    }


    public function getViajes($dni){
        $id=$this->getIdChofer($dni);
        return $this->database->query("SELECT * FROM viaje WHERE viaje.id_chofer='$id' and estado='PENDIENTE' ORDER BY fecha_salida_previsto asc ");
    }

    public function perfilChofer($dni){
        $sql="SELECT * FROM chofer WHERE chofer.dni_usuario='$dni'";
        $chofer=$this->database->query($sql);
        return $chofer;
    }

    public function verificarLicencia($dni){
        $sql="SELECT tipo_licencia FROM chofer WHERE chofer.dni_usuario='$dni'";
        $chofer=$this->database->queryNum($sql);
        $tipo_licencia=$chofer[0];
        return $tipo_licencia;
    }

    public function insertLicencia($dni,$tipo_licencia){
        $sql = "UPDATE chofer SET chofer.tipo_licencia='$tipo_licencia' WHERE chofer.dni_usuario ='$dni'";
        return $this->database->execute($sql);
    }


}