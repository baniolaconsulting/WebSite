<?php

namespace App\Entity;

use App\Repository\QcmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\ManyToMany(targetEntity=Compteutilisateur::class, mappedBy="matriculeqcm")
     */
    private $compteutilisateurs;

    /**
     * @ORM\OneToMany(targetEntity=Question::class, mappedBy="matriculeqcm")
     */
    private $questions;

    public function __construct()
    {
        $this->compteutilisateurs = new ArrayCollection();
        $this->questions = new ArrayCollection();
    }

    

   

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

    /**
     * @return Collection|Compteutilisateur[]
     */
    public function getCompteutilisateurs(): Collection
    {
        return $this->compteutilisateurs;
    }

    public function addCompteutilisateur(Compteutilisateur $compteutilisateur): self
    {
        if (!$this->compteutilisateurs->contains($compteutilisateur)) {
            $this->compteutilisateurs[] = $compteutilisateur;
            $compteutilisateur->addMatriculeqcm($this);
        }

        return $this;
    }

    public function removeCompteutilisateur(Compteutilisateur $compteutilisateur): self
    {
        if ($this->compteutilisateurs->removeElement($compteutilisateur)) {
            $compteutilisateur->removeMatriculeqcm($this);
        }

        return $this;
    }

    /**
     * @return Collection|Question[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
            $question->setMatriculeqcm($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        if ($this->questions->removeElement($question)) {
            // set the owning side to null (unless already changed)
            if ($question->getMatriculeqcm() === $this) {
                $question->setMatriculeqcm(null);
            }
        }

        return $this;
    }

   
    public function __toString(): string
    {
        //return '$matriculeqcm , ' .'$compteutilisateurs , '.'$question';
        return '';
    }

   
}
