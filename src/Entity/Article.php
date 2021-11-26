<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
    private $matriculearticle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nommarque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nommodele;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $technicites;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculearticle(): ?string
    {
        return $this->matriculearticle;
    }

    public function setMatriculearticle(string $matriculearticle): self
    {
        $this->matriculearticle = $matriculearticle;

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

    public function getNommodele(): ?string
    {
        return $this->nommodele;
    }

    public function setNommodele(string $nommodele): self
    {
        $this->nommodele = $nommodele;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getTechnicites(): ?string
    {
        return $this->technicites;
    }

    public function setTechnicites(string $technicites): self
    {
        $this->technicites = $technicites;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
