<?php
    //Incluyo los archivos
    require_once 'Controller/SolicitarRetiroController.php';
    require_once 'Controller/PostCercanosController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("SOLICITAR_RETIRO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/solicitarRetiro');
    
    $r = new Router();

    // RUTAS:
    $r->addRoute("solicitarRetiro", "GET", "SolicitarRetiroController", "mostrarFormularioSolicitarRetiro");
    $r->addRoute("postCercanos", "GET", "PostCercanosController", "mostrarPostCercanos");
    $r->addRoute("confirmarSolicitudDeRetiro", "POST", "SolicitarRetiroController", "agregarSolicitudDeRetiro"); //SolicitarRetiro


    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>