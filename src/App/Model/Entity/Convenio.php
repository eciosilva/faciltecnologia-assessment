<?php

namespace App\Model\Entity;

use App\Model\Repository\BancoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="BancoRepository")
 * @ORM\Table(name="tb_banco")
 */
class Banco
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $codigo;

    /**
     * @ORM\Column(type="string")
     */
    private $convenio;

    /**
     * @ORM\Column(type="decimal", precision=2)
     */
    private $verba;

    /**
     * @ORM\ManyToOne(targetEntity="Banco", inversedBy="convenios")
     * @ORM\JoinColumn(name: 'banco', referencedColumnName: 'codigo')
     */
    private $banco;    

    /**
     * Get the value of codigo
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     */
    public function setCodigo($codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of convenio
     */
    public function getConvenio()
    {
        return $this->convenio;
    }

    /**
     * Set the value of convenio
     */
    public function setConvenio($convenio): self
    {
        $this->convenio = $convenio;

        return $this;
    }

    /**
     * Get the value of verba
     */
    public function getVerba()
    {
        return $this->verba;
    }

    /**
     * Set the value of verba
     */
    public function setVerba($verba): self
    {
        $this->verba = $verba;

        return $this;
    }

    /**
     * Get the value of banco
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set the value of banco
     */
    public function setBanco($banco): self
    {
        $this->banco = $banco;

        return $this;
    }
}