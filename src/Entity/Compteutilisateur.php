<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use App\Repository\CompteutilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\EqualTo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=CompteutilisateurRepository::class)
 *  @UniqueEntity(
 *     fields={"mail"},
 *     message="L'adresse e-mail fournie ne doit pas être déjà existante."
 * )
 */


class Compteutilisateur implements UserInterface
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
    private $matriculeutilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomcompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomcompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8" ,minMessage="Le mot de passe doit être de 8 caractères au minimum." )
     * @Assert\EqualTo(propertyPath="confirm_pwd")
     */
    private $pwd;

    /**
     * @Assert\EqualTo(propertyPath="pwd")
     */


     
    public $confirm_pwd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $tel;

    


    public function getUserIdentifier()
    {
        return $this->getId();
    }

    public function getUsername()
    {
        return $this->login;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->pwd;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    public function __construct()
    {
        $this->matriculeqcm = new ArrayCollection();
        $this->avis = new ArrayCollection();
      
        
        $this->setMatriculeutilisateur("null");
        $this->annonces = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeutilisateur(): ?string
    {
        return $this->matriculeutilisateur;
    }

    public function setMatriculeutilisateur(string $matriculeutilisateur): self
    {
        $this->matriculeutilisateur = $matriculeutilisateur;

        return $this;
    }

    public function getNomcompte(): ?string
    {
        return $this->nomcompte;
    }

    public function setNomcompte(string $nomcompte): self
    {
        $this->nomcompte = $nomcompte;

        return $this;
    }

    public function getPrenomcompte(): ?string
    {
        return $this->prenomcompte;
    }

    public function setPrenomcompte(string $prenomcompte): self
    {
        $this->prenomcompte = $prenomcompte;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }



    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

   

   

    

  

  
    /**
     * @return Collection|Annonce[]
     */
    public function getAnnonce(): Collection
    {
        return $this->articles;
    }



    public function __toString()
    {
        return "";
    }

    /**
     * @return Collection|Annonce[]
     */
    public function getAnnonces(): Collection
    {
        return $this->annonces;
    }

    public function addAnnonce(Annonce $annonce): self
    {
        if (!$this->annonces->contains($annonce)) {
            $this->annonces[] = $annonce;
            $annonce->setUsers($this);
        }

        return $this;
    }

    public function removeAnnonce(Annonce $annonce): self
    {
        if ($this->annonces->removeElement($annonce)) {
            // set the owning side to null (unless already changed)
            if ($annonce->getUsers() === $this) {
                $annonce->setUsers(null);
            }
        }

        return $this;
    }
}
    