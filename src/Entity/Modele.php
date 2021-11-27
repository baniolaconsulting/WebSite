<?php

namespace App\Entity;

use App\Repository\ModeleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModeleRepository::class)
 */
class Modele
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matriculemodele;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nommodele;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $technicite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculemodele(): ?string
    {
        return $this->matriculemodele;
    }

    public function setMatriculemodele(string $matriculemodele): self
    {
        $this->matriculemodele = $matriculemodele;

        return $this;
    }

    public function getNommodele(): ?string
    {
        return $this->nommodele;
    }

    public function setNommodele(string $nommodele): self
    {
        $this->nommodele = $nommodele;

        return $this;
    }

    public function getTechnicite(): ?string
    {
        return $this->technicite;
    }

    public function setTechnicite(string $technicite): self
    {
        $this->technicite = $technicite;

        return $this;
    }
}
