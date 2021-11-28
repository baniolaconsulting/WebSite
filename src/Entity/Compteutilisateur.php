<?php

namespace App\Entity;

use App\Repository\CompteutilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeutilisateur;

    /**
     * @ORM\ManyToMany(targetEntity=Qcm::class, inversedBy="compteutilisateurs")
     */
    private $matriculeqcm;

    /**
     * @ORM\OneToMany(targetEntity=Avis::class, mappedBy="matriculeutilisateur")
     */
    private $avis;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="matriculeutilisateur")
     */
    private $articles;

    public function __construct()
    {
        $this->matriculeqcm = new ArrayCollection();
        $this->avis = new ArrayCollection();
        $this->articles = new ArrayCollection();
    }

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

    public function getTypeutilisateur(): ?string
    {
        return $this->typeutilisateur;
    }

    public function setTypeutilisateur(string $typeutilisateur): self
    {
        $this->typeutilisateur = $typeutilisateur;

        return $this;
    }

    /**
     * @return Collection|qcm[]
     */
    public function getMatriculeqcm(): Collection
    {
        return $this->matriculeqcm;
    }

    public function addMatriculeqcm(qcm $matriculeqcm): self
    {
        if (!$this->matriculeqcm->contains($matriculeqcm)) {
            $this->matriculeqcm[] = $matriculeqcm;
        }

        return $this;
    }

    public function removeMatriculeqcm(qcm $matriculeqcm): self
    {
        $this->matriculeqcm->removeElement($matriculeqcm);

        return $this;
    }

    /**
     * @return Collection|Avis[]
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): self
    {
        if (!$this->avis->contains($avi)) {
            $this->avis[] = $avi;
            $avi->setMatriculeutilisateur($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): self
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getMatriculeutilisateur() === $this) {
                $avi->setMatriculeutilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setMatriculeutilisateur($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getMatriculeutilisateur() === $this) {
                $article->setMatriculeutilisateur(null);
            }
        }

        return $this;
    }
}
