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

    public function cargarViaje($origen,$destino,$fechaCarga,$idSup,$idChofer,$idTractor,$idArrastrado,
    $eta,$etd,$tipoCarga,$pesoNeto,$hazard,$reefer,$kmPrev,$combPrev,$peajePrev,$pesajePrev,$viaticoPrev,
    $extrasPrev,$feePrev,$hazardPrecio,$reeferPrecio){
        $dia=date("d");
        $mes=date("m");
        $anio=date("Y");
        $fecha=$anio."/".$mes."/".$dia;


        $estado = "PENDIENTE";
        $sql="INSERT INTO viaje (fecha,origen,destino,fecha_carga,estado,id_supervisor,id_chofer,id_tractor,
                   id_arrastrado,	fecha_llegada_previsto,fecha_salida_previsto,tipo_carga,peso_neto,hazard,reefer,
                   	kilometros_previsto,combustible_previsto,peajes_previsto,pesajes_previsto,viaticos_previsto,
                   extras_previsto,fee_previsto,hazard_precio,reefer_precio)
                   VALUES ('$fecha','$origen','$destino','$fechaCarga','$estado','$idSup','$idChofer','$idTractor','$idArrastrado',
                           '$eta','$etd','$tipoCarga','$pesoNeto','$hazard','$reefer','$kmPrev','$combPrev','$peajePrev','$pesajePrev',
                           '$viaticoPrev','$extrasPrev','$feePrev','$hazardPrecio','$reeferPrecio')";

        $this->database->execute($sql);
    }

    public function getIdViaje(){
        $sqlId = "SELECT MAX(numero) AS numero FROM viaje";
        $idViaje=$this->database->queryResult($sqlId);
        return $idViaje;
    }

    public function cargarCliente($cuit,$direccion,$telefono,$email){
        $idViaje=$this->getIdViaje();

        $sql="INSERT INTO cliente(cuit,direccion,telefono,email,id_viaje)
                   VALUES ('$cuit','$direccion','$telefono','$email','$idViaje')";

        $this->database->execute($sql);
    }

    public function cargarCarga($tipo,$hazard,$reefer,$temp,$peso){
        $idViaje=$this->getIdViaje();

        $sql="INSERT INTO carga(tipo,hazard,reefer,temperatura,peso_neto,id_viaje)
                   VALUES ('$tipo','$hazard','$reefer','$temp','$peso','$idViaje')";

        $this->database->execute($sql);

    }



}