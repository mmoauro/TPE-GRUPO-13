<?php

require_once "./Model/UserModel.php";
require_once "./View/UserView.php";

class UserController{

    private $model;
    private $view;

    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();
    }
    
   function Login(){
        $this->view->showLogin();
   }

   function Verificar(){
    $mail = $_POST['mail'];
    $pass = $_POST['password'];

    if(isset($mail)){
        $usuarioDB = $this->model->GetUser($mail);

        if(isset($usuarioDB) && $usuarioDB){
            // Existe el usuario
            if (password_verify($pass, $usuarioDB->contrasenia)){
                session_start();
                    $_SESSION["mail"] = $usuarioDB->mail;
                    $_SESSION["rol"] = $usuarioDB->rol;
                    $_SESSION['LAST_ACTIVITY'] = time();
                header("Location: ".BASE_URL."home");
            }else{
                $this->view->showLogin("Contraseña incorrecta");
            }

        }else{
            // No existe el user en la DB
            $this->view->showLogin("El usuario no existe");
        }
    }
   }

   function CerrarSesion(){
        session_start();
        session_destroy();
        header("Location: ". LOGIN);
    }
}