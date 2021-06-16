<?php


class AuthHelper {

    function __construct () {
        session_start();
    }

    function startSessionVariables ($user) {
        $_SESSION['user'] = $user;
        $_SESSION['logged'] = true;
    }

    function getIsSecretaria () {
        return isset($_SESSION['user']) && $_SESSION['user']->rol == 1;
    }

    function getIsLogged () {
        return isset($_SESSION['logged']) && $_SESSION['logged'] == true;
    }
}