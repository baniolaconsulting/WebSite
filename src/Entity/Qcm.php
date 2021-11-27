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

   
    

   
}
