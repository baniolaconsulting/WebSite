<?php

namespace App\Entity;

use App\Repository\TypeutilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeutilisateurRepository::class)
 */
class Typeutilisateur
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
    private $matriculetypeutilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeutilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $privileges;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculetypeutilisateur(): ?string
    {
        return $this->matriculetypeutilisateur;
    }

    public function setMatriculetypeutilisateur(string $matriculetypeutilisateur): self
    {
        $this->matriculetypeutilisateur = $matriculetypeutilisateur;

        return $this;
    }

    public function getTypeutilisateur(): ?string
    {
        return $this->typeutilisateur;
    }

    public function setTypeutilisateur(string $typeutilisateur): self
    {
        $this->typeutilisateur = $typeutilisateur;

        return $this;
    }

    public function getPrivileges(): ?string
    {
        return $this->privileges;
    }

    public function setPrivileges(string $privileges): self
    {
        $this->privileges = $privileges;

        return $this;
    }
}
