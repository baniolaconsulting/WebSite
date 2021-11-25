<?php

namespace App\Entity;

use App\Repository\PrivillegesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrivillegesRepository::class)
 */
class Privilleges
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
    private $matriculeprivillege;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomprivillege;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeprivillege(): ?string
    {
        return $this->matriculeprivillege;
    }

    public function setMatriculeprivillege(string $matriculeprivillege): self
    {
        $this->matriculeprivillege = $matriculeprivillege;

        return $this;
    }

    public function getNomprivillege(): ?string
    {
        return $this->nomprivillege;
    }

    public function setNomprivillege(string $nomprivillege): self
    {
        $this->nomprivillege = $nomprivillege;

        return $this;
    }
}
