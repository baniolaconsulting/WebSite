<?php

namespace App\Entity;

use App\Repository\MarqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity=Modele::class, mappedBy="matriculemarque")
     */
    private $modeles;

    public function __construct()
    {
        $this->modeles = new ArrayCollection();
    }

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

    /**
     * @return Collection|Modele[]
     */
    public function getModeles(): Collection
    {
        return $this->modeles;
    }

    public function addModele(Modele $modele): self
    {
        if (!$this->modeles->contains($modele)) {
            $this->modeles[] = $modele;
            $modele->setMatriculemarque($this);
        }

        return $this;
    }

    public function removeModele(Modele $modele): self
    {
        if ($this->modeles->removeElement($modele)) {
            // set the owning side to null (unless already changed)
            if ($modele->getMatriculemarque() === $this) {
                $modele->setMatriculemarque(null);
            }
        }

        return $this;
    }
}
