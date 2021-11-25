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
    private $fichetechniquemodele;

    /**
     * @ORM\Column(type="boolean")
     */
    private $requiredmatriculemarque;

    /**
     * @ORM\Column(type="integer")
     */
    private $prixmoybc;

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

    public function getFichetechniquemodele(): ?string
    {
        return $this->fichetechniquemodele;
    }

    public function setFichetechniquemodele(string $fichetechniquemodele): self
    {
        $this->fichetechniquemodele = $fichetechniquemodele;

        return $this;
    }

    public function getRequiredmatriculemarque(): ?bool
    {
        return $this->requiredmatriculemarque;
    }

    public function setRequiredmatriculemarque(bool $requiredmatriculemarque): self
    {
        $this->requiredmatriculemarque = $requiredmatriculemarque;

        return $this;
    }

    public function getPrixmoybc(): ?int
    {
        return $this->prixmoybc;
    }

    public function setPrixmoybc(int $prixmoybc): self
    {
        $this->prixmoybc = $prixmoybc;

        return $this;
    }
}
