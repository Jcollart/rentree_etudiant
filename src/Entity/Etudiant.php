<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtudiantRepository")
 */
class Etudiant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Mot_De_Passe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="integer")
     */
    private $Mobile;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Formulaire", inversedBy="Etudiant")
     */
    private $remplirform;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Formulaire", mappedBy="Remplirform")
     */
    private $Remplirform;

    public function __construct()
    {
        $this->remplirform = new ArrayCollection();
        $this->Remplirform = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->Mot_De_Passe;
    }

    public function setMotDePasse(string $Mot_De_Passe): self
    {
        $this->Mot_De_Passe = $Mot_De_Passe;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getMobile(): ?int
    {
        return $this->Mobile;
    }

    public function setMobile(int $Mobile): self
    {
        $this->Mobile = $Mobile;

        return $this;
    }

    /**
     * @return Collection|Formulaire[]
     */
    public function getRemplirform(): Collection
    {
        return $this->remplirform;
    }

    public function addRemplirform(Formulaire $remplirform): self
    {
        if (!$this->remplirform->contains($remplirform)) {
            $this->remplirform[] = $remplirform;
        }

        return $this;
    }

    public function removeRemplirform(Formulaire $remplirform): self
    {
        if ($this->remplirform->contains($remplirform)) {
            $this->remplirform->removeElement($remplirform);
        }

        return $this;
    }
}
