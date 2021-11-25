<?php

namespace App\Entity;

use App\Repository\ReponseutilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReponseutilisateurRepository::class)
 */
class Reponseutilisateur
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
    private $matriculereponseutilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reputilisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculereponseutilisateur(): ?string
    {
        return $this->matriculereponseutilisateur;
    }

    public function setMatriculereponseutilisateur(string $matriculereponseutilisateur): self
    {
        $this->matriculereponseutilisateur = $matriculereponseutilisateur;

        return $this;
    }

    public function getReputilisateur(): ?string
    {
        return $this->reputilisateur;
    }

    public function setReputilisateur(string $reputilisateur): self
    {
        $this->reputilisateur = $reputilisateur;

        return $this;
    }
}
