<?php

namespace App\Entity;

use App\Repository\ReponsecorrecteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReponsecorrecteRepository::class)
 */
class Reponsecorrecte
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
    private $matriculereponsecorrecte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $corrige;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculereponsecorrecte(): ?string
    {
        return $this->matriculereponsecorrecte;
    }

    public function setMatriculereponsecorrecte(string $matriculereponsecorrecte): self
    {
        $this->matriculereponsecorrecte = $matriculereponsecorrecte;

        return $this;
    }

    public function getCorrige(): ?string
    {
        return $this->corrige;
    }

    public function setCorrige(string $corrige): self
    {
        $this->corrige = $corrige;

        return $this;
    }
}
