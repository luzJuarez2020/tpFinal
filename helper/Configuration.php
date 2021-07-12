<?php
include_once("helper/MysqlDatabase.php");
include_once("helper/Render.php");
include_once("helper/UrlHelper.php");

include_once("model/TourModel.php");
include_once("model/loginModel.php");

include_once("controller/loginController.php");
include_once("controller/TourController.php");
include_once("controller/inicioController.php");
include_once("controller/QuieroSerParteController.php");

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

    public function getLoginModel(){
        $database = $this->getDatabase();
        return new loginModel($database);
    }

    public function getRender(){
        return new Render('view/partial');
    }

    public function getTourController(){
        $presentacionModel = $this->getPresentacionModel();
        return new TourController($presentacionModel, $this->getRender());
    }

    public function getLoginController(){
        $loginModel = $this->getLoginModel();
        return new loginController($loginModel, $this->getRender());
    }

    public function getLaBandaController(){
        return new inicioController($this->getRender());
    }

    public function getQuieroSerParteController(){
        return new QuieroSerParteController($this->getRender());
    }

    public function getRouter(){
        return new Router($this);
    }

    public function getUrlHelper(){
        return new UrlHelper();
    }
}