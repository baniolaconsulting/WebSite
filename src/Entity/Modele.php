<?php

namespace App\Entity;

use App\Repository\ModeleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity=Avis::class, mappedBy="matriculemodele")
     */
    private $avis;

    /**
     * @ORM\ManyToOne(targetEntity=Marque::class, inversedBy="modeles")
     */
    private $matriculemarque;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="matriculemodele")
     */
    private $articles;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
        $this->articles = new ArrayCollection();
    }

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
            $avi->setMatriculemodele($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): self
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getMatriculemodele() === $this) {
                $avi->setMatriculemodele(null);
            }
        }

        return $this;
    }

    public function getMatriculemarque(): ?marque
    {
        return $this->matriculemarque;
    }

    public function setMatriculemarque(?marque $matriculemarque): self
    {
        $this->matriculemarque = $matriculemarque;

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
            $article->setMatriculemodele($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getMatriculemodele() === $this) {
                $article->setMatriculemodele(null);
            }
        }

        return $this;
    }
    public function __toString(): string

    {
        return '';
    }
}
