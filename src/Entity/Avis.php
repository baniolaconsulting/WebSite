<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvisRepository::class)
 */
class Avis
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
    private $matriculeavis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity=Compteutilisateur::class, inversedBy="avis")
     */
    private $matriculeutilisateur;

    /**
     * @ORM\ManyToOne(targetEntity=Modele::class, inversedBy="avis")
     */
    private $matriculemodele;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeavis(): ?string
    {
        return $this->matriculeavis;
    }

    public function setMatriculeavis(string $matriculeavis): self
    {
        $this->matriculeavis = $matriculeavis;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getMatriculeutilisateur(): ?compteutilisateur
    {
        return $this->matriculeutilisateur;
    }

    public function setMatriculeutilisateur(?compteutilisateur $matriculeutilisateur): self
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
