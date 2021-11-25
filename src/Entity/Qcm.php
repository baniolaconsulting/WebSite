<?php

namespace App\Entity;

use App\Repository\QcmRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QcmRepository::class)
 */
class Qcm
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
    private $matriculeqcm;

    

    /**
     * @ORM\Column(type="integer")
     */
    private $resultatqcm;

    /**
     * @ORM\Column(type="array")
     */
    private $aaa = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeqcm(): ?string
    {
        return $this->matriculeqcm;
    }

    public function setMatriculeqcm(string $matriculeqcm): self
    {
        $this->matriculeqcm = $matriculeqcm;

        return $this;
    }

   
    public function getResultatqcm(): ?int
    {
        return $this->resultatqcm;
    }

    public function setResultatqcm(int $resultatqcm): self
    {
        $this->resultatqcm = $resultatqcm;

        return $this;
    }

   
}
