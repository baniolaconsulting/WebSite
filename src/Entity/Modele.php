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
     * @ORM\ManyToOne(targetEntity=Marque::class, inversedBy="modeles")
     */
    private $matriculemarque;

    
    /**
     * @ORM\OneToMany(targetEntity=Annonce::class, mappedBy="modele")
     */
    private $annonces;

    public function __construct()
    {
      
       
        $this->annonces = new ArrayCollection();
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

   


    public function getMatriculemarque(): ?marque
    {
        return $this->matriculemarque;
    }

    public function setMatriculemarque(?marque $matriculemarque): self
    {
        $this->matriculemarque = $matriculemarque;

        return $this;
    }

   
    public function __toString(): string

    {
        return '';
    }

    /**
     * @return Collection|Annonce[]
     */
    public function getAnnonces(): Collection
    {
        return $this->annonces;
    }

    public function addAnnonce(Annonce $annonce): self
    {
        if (!$this->annonces->contains($annonce)) {
            $this->annonces[] = $annonce;
            $annonce->setModele($this);
        }

        return $this;
    }

    public function removeAnnonce(Annonce $annonce): self
    {
        if ($this->annonces->removeElement($annonce)) {
            // set the owning side to null (unless already changed)
            if ($annonce->getModele() === $this) {
                $annonce->setModele(null);
            }
        }

        return $this;
    }
}
