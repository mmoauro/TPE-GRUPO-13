<?php

require_once "./Model/UserModel.php";
require_once "./View/UserView.php";
require_once 'Controller/Controller.php';

class UserController extends Controller {

    function __construct(){
        parent::__construct();
        $this->view = new UserView($this->auth->getIsSecretaria(), $this->auth->getIsLogged());
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
                $this->auth->startSessionVariables($usuarioDB);
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

   function logout (){
        session_start();
        session_destroy();
        header("Location: ". BASE_URL);
    }
}