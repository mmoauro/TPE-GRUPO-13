<?php
require_once 'Controller/AuthHelper.php';

abstract class Controller {
    protected $view;
    protected $model;
    protected $auth;

    function __construct () {
        $this->auth = new AuthHelper();
    }
}