<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
    private $matriculearticle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculearticle(): ?string
    {
        return $this->matriculearticle;
    }

    public function setMatriculearticle(string $matriculearticle): self
    {
        $this->matriculearticle = $matriculearticle;

        return $this;
    }
}
