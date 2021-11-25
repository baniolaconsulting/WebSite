<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
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
     * @ORM\Column(type="string", length=255)
     */
    private $matriculeannonce;

    /**
     * @ORM\Column(type="integer")
     */
    private $prixannonce;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $autrecommentaire;

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

    public function getPrixannonce(): ?int
    {
        return $this->prixannonce;
    }

    public function setPrixannonce(int $prixannonce): self
    {
        $this->prixannonce = $prixannonce;

        return $this;
    }

    public function getAutrecommentaire(): ?string
    {
        return $this->autrecommentaire;
    }

    public function setAutrecommentaire(string $autrecommentaire): self
    {
        $this->autrecommentaire = $autrecommentaire;

        return $this;
    }
}
