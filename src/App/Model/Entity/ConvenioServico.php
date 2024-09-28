<?php

namespace App\Model\Entity;

use App\Model\Repository\ConvenioServicoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ConvenioServicoRepository")
 * @ORM\Table(name="tb_convenio_servico")
 */
class ConvenioServico
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $codigo;

    /**
     * @ORM\ManyToOne(targetEntity="Convenio")
     * @ORM\JoinColumn(name: 'convenio', referencedColumnName: 'codigo')
     */
    private $convenio;

    /**
     * @ORM\Column(type="string")
     */
    private $servico;

    /**
     * @ORM\OneToMany(targetEntity: "Contrato", mappedBy: 'convenioServico')
     * @var Collection<int, Contrato>
     */
    private Collection $contratos;

    public function __construct() {
        $this->contratos = new ArrayCollection();
    }

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
     * Get the value of servico
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * Set the value of servico
     */
    public function setServico($servico): self
    {
        $this->servico = $servico;

        return $this;
    }

    /**
     * Get the value of contratos
     */
    public function getContratos(): Collection
    {
        return $this->contratos;
    }

    /**
     * Set the value of contratos
     */
    public function setContratos(Collection $contratos): self
    {
        $this->contratos = $contratos;

        return $this;
    }
}