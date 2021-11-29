<?php

namespace App\Entity;

use App\Repository\ChoixRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChoixRepository::class)
 */
class Choix
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
    private $matriculechoix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity=Question::class, inversedBy="choixes")
     */
    private $matriculequestion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculechoix(): ?string
    {
        return $this->matriculechoix;
    }

    public function setMatriculechoix(string $matriculechoix): self
    {
        $this->matriculechoix = $matriculechoix;

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

    public function getMatriculequestion(): ?question
    {
        return $this->matriculequestion;
    }

    public function setMatriculequestion(?question $matriculequestion): self
    {
        $this->matriculequestion = $matriculequestion;

        return $this;
    }
}
