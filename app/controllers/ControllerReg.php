<?php

class ControllerReg extends Controller
{
    public function __construct()
    {
        $this->model = new ModelReg();
        $this->view = new View();
    }

    public function actionIndex()
    {
        $data = $this->model->statusModel;  // вывод ошибок и замечаний
        $this->view->twig->display('reg_view.html', array('data' => $data));
    }

    public function actionPost()
    {
        $this->model->postHandler();
        $data = $this->model->statusModel;  // вывод ошибок и замечаний
        $this->view->twig->display('reg_view.html', array('data' => $data));
    }

    public function actionExit()
    {
        if (session_id() != "" || isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 2592000, '/');
            session_destroy();
            //array_push($this->model->statusModel, 'Сессия успешно закрыта');
            header('Location: /reg/index');
            exit();
        }
    }
}