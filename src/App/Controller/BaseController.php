<?php

namespace App\Controller;

abstract class BaseController
{

    /**
     * @var \Twig\Environment
     */
    protected $twig;

    public function __construct()
    {
        $this->initTwig();
        
    }

    private function initTwig()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../src/App/View');
        $this->twig = new \Twig\Environment($loader);
    }

}