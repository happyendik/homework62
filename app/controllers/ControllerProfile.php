<?php

class ControllerProfile extends Controller
{
    public function __construct()
    {
        $this->model = new ModelProfile();
        $this->view = new View();
    }

    public function actionIndex()
    {
        $this->model->checkAccess(); //404 - если нет доступа
        //$this->model->checkProfileImage(); //TODO: ???
        $this->model->showProfileInformation();
        $data = $this->model->statusModel;
        $this->view->twig->display('profile_view.html', array('data' => $data));
    }

    public function actionPost()
    {
        $this->model->checkAccess(); //404 - если нет доступа
        $this->model->postHandler();
        $this->model->showProfileInformation();
        $data = $this->model->statusModel;
        $this->view->twig->display('profile_view.html', array('data' => $data));
    }
}