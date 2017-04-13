<?php

class Model
{
    public $connect;
    public $statusModel = array();
    public $siteKey = '6LcQLhwUAAAAACNTsgbRxE43tBJTjby5HsTfyL3u';
    public $secret  = '6LcQLhwUAAAAAIBvN9GHonGpvd0xjoIXOgH4d3Dk';
    public $lang    = 'ru';


    // в Конструкторе открываем соединение с БД, в Деструкторе закрываем
    public function __construct()
    {
        $this->connect = new DB();
        array_push($this->statusModel, 'Соединение с БД успешно установлено');
    }

    public function queryMysql($query)
    {
        $result = $this->connect->connection->query($query);
        if (!$result) {
            die ('Ошибка при выполнении запроса -> ' . $this->connect->connection->error);
        }
        return $result;
    }

    public function sanitizeString($var)
    {
        $var = strip_tags($var);
        $var = htmlentities($var);
        $var = stripslashes($var);
        return $this->connect->connection->real_escape_string($var);
    }

    public function recaptcha()
    {
        $recaptcha = new \ReCaptcha\ReCaptcha($this->secret);
        $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
        if ($resp->isSuccess()){
            //echo 'рекапча пройдена';
        } else {
            header('Location: /reg/index');
            array_push($this->statusModel, 'введите рекапчу');
            exit();
        }
    }

    public function __destruct()
    {
        $this->connect->connection->close();
    }

    public function checkAccess()
    {
        if (!isset($_SESSION['login'])){
            Route::ErrorPage404();
            exit();
        }
    }

}