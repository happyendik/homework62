<?php

class Controller
{

    public $model;
    public $view;
    public $actionVar; //TODO: ???

    function __construct()
    {
        $this->view = new View();
    }

    function actionIndex()
    {
    }
}