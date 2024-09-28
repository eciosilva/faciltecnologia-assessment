<?php

namespace App\Controller;

use App\Helper\VarDumper;
use App\Model\Repository\BancoRepository;
use App\Model\Repository\ContratoRepository;

/**
 * Default Controller class
 */
class DefaultController extends BaseController
{

    public function index(): void
    {
        echo $this->twig->render('default/dashboard.html.twig', []);
    }

    public function questao1(): void
    {
        $data = ContratoRepository::listContratos();
        echo $this->twig->render('default/questao1.html.twig', ['items' => $data]);
    }

    public function questao2(): void
    {
        $data = BancoRepository::listConveniosGroupedByBanco();
        echo $this->twig->render('default/questao2.html.twig', ['items' => $data]);
    }

}