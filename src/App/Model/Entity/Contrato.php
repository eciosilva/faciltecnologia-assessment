<?php

namespace App\Model\Entity;

use App\Model\Repository\ContratoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ContratoRepository")
 * @ORM\Table(name="tb_contrato")
 */
class Contrato
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $codigo;

    /**
     * @ORM\Column(type="integer")
     */
    private $prazo;

    /**
     * @ORM\Column(type="decimal", precision=2)
     */
    private $valor;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dataInclusao;

    /**
     * @ORM\ManyToOne(targetEntity="ConvenioServico", inversedBy="contratos")
     * @ORM\JoinColumn(name: 'convenio_servico', referencedColumnName: 'codigo')
     */
    private $convenioServico;

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
     * Get the value of prazo
     */
    public function getPrazo()
    {
        return $this->prazo;
    }

    /**
     * Set the value of prazo
     */
    public function setPrazo($prazo): self
    {
        $this->prazo = $prazo;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of dataInclusao
     */
    public function getDataInclusao()
    {
        return $this->dataInclusao;
    }

    /**
     * Set the value of dataInclusao
     */
    public function setDataInclusao($dataInclusao): self
    {
        $this->dataInclusao = $dataInclusao;

        return $this;
    }

    /**
     * Get the value of convenioServico
     */
    public function getConvenioServico()
    {
        return $this->convenioServico;
    }

    /**
     * Set the value of convenioServico
     */
    public function setConvenioServico($convenioServico): self
    {
        $this->convenioServico = $convenioServico;

        return $this;
    }
}