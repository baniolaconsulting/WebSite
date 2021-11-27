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
    private $matriculereponse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenureponse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculereponse(): ?string
    {
        return $this->matriculereponse;
    }

    public function setMatriculereponse(string $matriculereponse): self
    {
        $this->matriculereponse = $matriculereponse;

        return $this;
    }

    public function getContenureponse(): ?string
    {
        return $this->contenureponse;
    }

    public function setContenureponse(string $contenureponse): self
    {
        $this->contenureponse = $contenureponse;

        return $this;
    }
}
