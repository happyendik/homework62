<?php
class ControllerFilelist extends Controller
{
    public $dataArray;
    public function __construct()
    {
        $this->model = new ModelFilelist();
        $this->view = new View();
    }

    public function actionIndex()
    {
        $this->model->checkAccess(); //404 - если нет доступа
        $data = $this->model->statusModel;
        $rows = $this->model->showInformationList();
        $this->view->twig->display('filelist_view.html', array('data' => $data, 'rows' => $rows));
    }

    public function actionDelete()
    {
        $this->model->checkAccess(); //404 - если нет доступа
        $this->model->deleteUser($this->actionVar);
        $data = $this->model->statusModel;
        $rows = $this->model->showInformationList();
        $this->view->twig->display('filelist_view.html', array('data' => $data, 'rows' => $rows));
    }
}