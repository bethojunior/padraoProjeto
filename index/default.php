<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// ini_set('session.gc_probality', 0);
// date_default_timezone_set('America/Fortaleza');

session_start();
startIncludes('../services');
startIncludes('../mvc/controller');
require_once('../mvc/lib/WideImage.php');
startIncludes('../mvc/dao');
startIncludes('../mvc/model');


if (!isset($_GET['url'])) {
    //Controller::redirectController("Index");
    Controller::redirectControllerAction("Index","geocorr");
    return;
 }
 
 $params = explode('/', $_GET['url' ]);
 
 if (!isset($params[0])) {
    //Controller::redirectController("Index");
    Controller::redirectControllerAction("Index","geocorr");
    return;
 }
 
 $class = $params[0];
 
 if (isset($params[1])) {
    $action = "action" . $params[1];
 }
 
 $classController = $class . 'Controller';
 
 
 if (!class_exists($classController)) {
    Controller::renderView("404");
    return;
 }
 $obj = new $classController();
 
 if (!isset($action) || !method_exists($obj, $action)) {
    return;
 }
 
 if (Permission::checkActionPermission($action) || isset($_SESSION['user_object']) || isset($_POST['token'])) {
    $obj->$action();
 }else{
    Controller::redirectControllerAction("Index","geocorr");

 }
 
 
 function startIncludes($path)
 {
    foreach (scandir($path) as $filename) {
        $file = $path . '/' . $filename;
        $extension = explode('.', $file);
        if (is_file($file) && end($extension) == "php") {
            require $file;
        }
    }
 }
 
 