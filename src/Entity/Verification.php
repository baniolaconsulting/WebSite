<?php

namespace App\Entity;

use App\Repository\VerificationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VerificationRepository::class)
 */
class Verification
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
    private $matriculeverification;

    /**
     * @ORM\Column(type="boolean")
     */
    private $verif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeverification(): ?string
    {
        return $this->matriculeverification;
    }

    public function setMatriculeverification(string $matriculeverification): self
    {
        $this->matriculeverification = $matriculeverification;

        return $this;
    }

    public function getVerif(): ?bool
    {
        return $this->verif;
    }

    public function setVerif(bool $verif): self
    {
        $this->verif = $verif;

        return $this;
    }
}
