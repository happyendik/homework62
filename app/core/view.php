<?php

class View
{
    public $twig;
    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem('app/views');
        $this->twig = new Twig_Environment($loader, array(
            'cache'       => 'cache',
            'auto_reload' => true
        ));

    }
}