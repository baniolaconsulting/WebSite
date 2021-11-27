<?php

namespace App\Entity;

use App\Repository\MarqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MarqueRepository::class)
 */
class Marque
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
    private $matriculemarque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nommarque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $groupeconstructeur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculemarque(): ?string
    {
        return $this->matriculemarque;
    }

    public function setMatriculemarque(string $matriculemarque): self
    {
        $this->matriculemarque = $matriculemarque;

        return $this;
    }

    public function getNommarque(): ?string
    {
        return $this->nommarque;
    }

    public function setNommarque(string $nommarque): self
    {
        $this->nommarque = $nommarque;

        return $this;
    }

    public function getGroupeconstructeur(): ?string
    {
        return $this->groupeconstructeur;
    }

    public function setGroupeconstructeur(string $groupeconstructeur): self
    {
        $this->groupeconstructeur = $groupeconstructeur;

        return $this;
    }
}
