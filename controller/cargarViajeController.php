<?php


class cargarViajeController
{
    private $cargaModel;
    private $render;

    public function __construct($cargaModel, $render){
        $this->cargaModel = $cargaModel;
        $this->render = $render;
    }


    public function execute(){
        if (isset($_SESSION['usuario'])) {
            $data["camiones"] = $this->cargaModel->getCamiones();
            $data["arrastrados"] = $this->cargaModel->getArrastrados();
            $data["supervisores"] = $this->cargaModel->getSupervisores();
            $data["choferes"] = $this->cargaModel->getChoferes();
            echo $this->render->render("view/crearProforma.php",$data);
        }else{
            header("Location:/inicio");
            exit;
        }
    }



    public function cargarProforma(){
        $cuitCliente=$_POST["cuitCliente"];
        $emailCliente=$_POST["emailCliente"];
        $direccionCliente=$_POST["direccionCliente"];
        $telCliente=$_POST["telCliente"];

        $fechaCarga=$_POST["fechaCarga"];
        $origen=$_POST["origen"];
        $destino=$_POST["destino"];
        $etd=$_POST["etd"];
        $eta=$_POST["eta"];
        $kmPrev=$_POST["kmPrev"];
        $combustiblePrev=$_POST["combustiblePrev"];
       //falta en base $gastosCombustiblePrev=$_POST["gastosCombustiblePrev"];
        $peajePrev=$_POST["peajePrev"];
        $pesajePrev=$_POST["pesajePrev"];
        $viaticosPrev=$_POST["viaticosPrev"];
        $extrasPrev=$_POST["extrasPrev"];
        $feePrev=$_POST["feePrev"];

        $tipoCarga=$_POST["tipoCarga"];
        $hazard=$_POST["hazard"];
        $precioHazard=$_POST["precioHazard"];
        $reefer=$_POST["reefer"];
        $precioReefer=$_POST["precioReefer"];
        $pesoCarga=$_POST["pesoCarga"];
        $temperatura=$_POST["temp"];

        $tractorViaje=$_POST["tractorViaje"]; //patentes
        $arrastradoViaje=$_POST["arrastradoViaje"]; //patentes
        $supervisorViaje=$_POST["supervisorViaje"]; //dni
        $choferViaje=$_POST["choferViaje"]; //dni



     $this->cargaModel->cargarViaje($origen,$destino,$fechaCarga,$supervisorViaje,$choferViaje,$tractorViaje,$arrastradoViaje,
        $eta,$etd,$tipoCarga,$pesoCarga,$hazard,$reefer,$kmPrev,$combustiblePrev,$peajePrev,$pesajePrev,$viaticosPrev,$extrasPrev,
            $feePrev,$precioHazard,$precioReefer);
       $this->cargaModel->cargarCliente($cuitCliente,$direccionCliente,$telCliente,$emailCliente);
        $this->cargaModel->cargarCarga($tipoCarga,$hazard,$reefer,$temperatura,$pesoCarga);

        if($_SESSION['usuario']==1){
            header("Location:/administrador");
        }else if($_SESSION['usuario']==2){
            header("Location:/supervisor");
        }

    }

}