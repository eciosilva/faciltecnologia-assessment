<?php

namespace App\Model\Entity;

use App\Model\Repository\BancoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $nome;

    /**
     * @ORM\OneToMany(targetEntity: "Convenio", mappedBy: 'banco')
     * @var Collection<int, Convenio>
     */
    private $convenios;

    public function __construct() {
        $this->convenios = new ArrayCollection();
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
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get convenio>
     */
    public function getConvenios(): Collection
    {
        return $this->convenios;
    }

    /**
     * Set convenio>
     */
    public function setConvenios(Collection $convenios): self
    {
        $this->convenios = $convenios;

        return $this;
    }
}