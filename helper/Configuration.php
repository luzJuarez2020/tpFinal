<?php
include_once("helper/MysqlDatabase.php");
include_once("helper/Render.php");
include_once("helper/UrlHelper.php");


include_once("model/loginModel.php");
include_once("model/registroModel.php");
include_once("model/administradorModel.php");
include_once("model/supervisorModel.php");
include_once("model/cargarViajeModel.php");
include_once("model/choferModel.php");


include_once("controller/loginController.php");
include_once("controller/choferController.php");
include_once("controller/inicioController.php");
include_once("controller/registroController.php");
include_once("controller/administradorController.php");
include_once("controller/supervisorController.php");
include_once("controller/cargarViajeController.php");
include_once("controller/detallePdfController.php");


include_once('third-party/mustache/src/Mustache/Autoloader.php');
include_once("Router.php");

class Configuration{
    public function getPresentacionModel(){
        $database = $this->getDatabase();
        return new TourModel($database);
    }

    private function getDatabase(){
        $config = $this->getConfig();
        return new MysqlDatabase(
            $config["servername"],
            $config["username"],
            $config["password"],
            $config["dbname"]
        );
    }

    private function getConfig(){
        return parse_ini_file("config/config.ini");
    }

    public function getInicioController(){
        return new inicioController($this->getRender());
    }

    public function getLoginModel(){
        $database = $this->getDatabase();
        return new loginModel($database);
    }

    public function getLoginController(){
        $loginModel = $this->getLoginModel();
        return new loginController($loginModel, $this->getRender());
    }

    public function getChoferModel(){
        $database = $this->getDatabase();
        return new choferModel($database);
    }


    public function getChoferController(){
        $choferModel = $this->getChoferModel();
        return new choferController($choferModel,$this->getRender());
    }

    public function getRegistroModel(){
        $database = $this->getDatabase();
        return new registroModel($database);
    }


    public function getRegistroController(){
        $registroModel = $this->getRegistroModel();
        return new registroController($registroModel, $this->getRender());
    }

    public function getDetallePdfController(){
        return new detallePdfController($this->getRender());
    }


    public function getSupervisorModel(){
        $database = $this->getDatabase();
        return new supervisorModel($database);
    }


    public function getSupervisorController(){
        $supervisorModel = $this->getSupervisorModel();
        return new supervisorController($supervisorModel, $this->getRender());
    }


    public function getAdministradorModel(){
        $database = $this->getDatabase();
        return new administradorModel($database);
    }

    public function getAdministradorController(){
        $admiModel = $this->getAdministradorModel();
        return new administradorController($admiModel, $this->getRender());
    }

    public function getCargarViajeModel(){
        $database = $this->getDatabase();
        return new cargarViajeModel($database);
    }

    public function getCargarViajeController(){
        $cargaModel = $this->getCargarViajeModel();
        return new cargarViajeController($cargaModel, $this->getRender());
    }


    public function getRender(){
        return new Render('view/partial');
    }


    public function getRouter(){
        return new Router($this);
    }

    public function getUrlHelper(){
        return new UrlHelper();
    }
}