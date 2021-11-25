<?php

namespace App\Entity;

use App\Repository\CompteutilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteutilisateurRepository::class)
 */
class Compteutilisateur
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
    private $matriculeutilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomcompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomcompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pwd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $tel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeutilisateur(): ?string
    {
        return $this->matriculeutilisateur;
    }

    public function setMatriculeutilisateur(string $matriculeutilisateur): self
    {
        $this->matriculeutilisateur = $matriculeutilisateur;

        return $this;
    }

    public function getNomcompte(): ?string
    {
        return $this->nomcompte;
    }

    public function setNomcompte(string $nomcompte): self
    {
        $this->nomcompte = $nomcompte;

        return $this;
    }

    public function getPrenomcompte(): ?string
    {
        return $this->prenomcompte;
    }

    public function setPrenomcompte(string $prenomcompte): self
    {
        $this->prenomcompte = $prenomcompte;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }
}
