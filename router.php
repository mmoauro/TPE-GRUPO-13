<?php
    //Incluyo los archivos
    require_once 'Controller/SolicitarRetiroController.php';
    require_once 'Controller/PostCercanosController.php';
    require_once 'Controller/MaterialController.php';
    require_once 'RouterClass.php';
    require_once 'Controller/UserController.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("SOLICITAR_RETIRO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/solicitarRetiro');
    
    $r = new Router();

    // RUTAS:
    $r->addRoute("/", "GET", "PostCercanosController", "mostrarPostCercanos");
    $r->addRoute("home", "GET", "PostCercanosController", "mostrarPostCercanos");
    $r->addRoute("solicitar_retiro", "GET", "SolicitarRetiroController", "mostrarFormularioSolicitarRetiro");
    $r->addRoute("confirmar_solicitud_retiro", "POST", "SolicitarRetiroController", "agregarSolicitudDeRetiro"); //SolicitarRetiro
    
    //Tabla usuario
    $r->addRoute("login", "GET", "UserController", "Login");
    $r->addRoute("logout", "GET", "UserController", "logout");
    $r->addRoute("verificar", "POST", "UserController", "Verificar");
    $r->setDefaultRoute('PostCercanosController', 'mostrarPostCercanos');


    // Rutas materiales aceptables.
    $r->addRoute("material/delete/:ID", "GET", "MaterialController", "deleteMaterial");
    $r->addRoute("material/update/:ID", "POST", "MaterialController", "updateMaterial");
    $r->addRoute("material/add", "POST", "MaterialController", "insertMaterial");


//run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>