<?php
include_once("helper/Configuration.php");

ini_set("session.cookie_lifetime","7200");
ini_set("session.gc_maxlifetime","7200");

session_start();
$configuration = new Configuration();

$urlHelper = $configuration->getUrlHelper();
$module = $urlHelper->getModuleFromRequestOr("inicio");
$action = $urlHelper->getActionFromRequestOr("execute");


$router = $configuration->getRouter();
$router->executeActionFromModule($action, $module);
