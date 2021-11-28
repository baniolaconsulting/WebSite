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
     * @ORM\Column(type="float")
     */
    private $prix;

   

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Compteutilisateur::class, inversedBy="articles")
     */
    private $matriculeutilisateur;

    /**
     * @ORM\ManyToOne(targetEntity=Modele::class, inversedBy="articles")
     */
    private $matriculemodele;

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

    

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

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

    public function getMatriculeutilisateur(): ?Compteutilisateur
    {
        return $this->matriculeutilisateur;
    }

    public function setMatriculeutilisateur(?Compteutilisateur $matriculeutilisateur): self
    {
        $this->matriculeutilisateur = $matriculeutilisateur;

        return $this;
    }

    public function getMatriculemodele(): ?modele
    {
        return $this->matriculemodele;
    }

    public function setMatriculemodele(?modele $matriculemodele): self
    {
        $this->matriculemodele = $matriculemodele;

        return $this;
    }
}
