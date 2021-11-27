<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 */
class Question
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
    private $matriculequestion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ennonce;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculequestion(): ?string
    {
        return $this->matriculequestion;
    }

    public function setMatriculequestion(string $matriculequestion): self
    {
        $this->matriculequestion = $matriculequestion;

        return $this;
    }

    public function getEnnonce(): ?string
    {
        return $this->ennonce;
    }

    public function setEnnonce(string $ennonce): self
    {
        $this->ennonce = $ennonce;

        return $this;
    }

    
}
