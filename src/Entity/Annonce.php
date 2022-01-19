<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnnonceRepository::class)
 */
class Annonce
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $matriculeannonce;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="annonce", cascade={"persist"})
     */
    private $images;

    /**
     * @ORM\ManyToOne(targetEntity=Modele::class, inversedBy="annonces")
     */
    private $modele;

    /**
     * @ORM\ManyToOne(targetEntity=Compteutilisateur::class, inversedBy="annonces")
     */
    private $users;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->setMatriculeannonce("null");
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeannonce(): ?string
    {
        return $this->matriculeannonce;
    }

    public function setMatriculeannonce(string $matriculeannonce): self
    {
        $this->matriculeannonce = $matriculeannonce;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    /**
     * @return Collection|image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setAnnonce($this);
        }

        return $this;
    }

    public function removeImage(image $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getAnnonce() === $this) {
                $image->setAnnonce(null);
            }
        }

        return $this;
    }

    public function getModele(): ?modele
    {
        return $this->modele;
    }

    public function setModele(?modele $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getUsers(): ?Compteutilisateur
    {
        return $this->users;
    }

    public function setUsers(?Compteutilisateur $users): self
    {
        $this->users = $users;

        return $this;
    }
}
