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
    private $noms;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenoms;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mot_de_passe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $mobile;

   

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Formulaire", mappedBy="remplirform")
     */
    private $formulaires;

    

    public function __construct()
    {
        $this->formulaire = new ArrayCollection();
        $this->formulaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoms(): ?string
    {
        return $this->noms;
    }

    public function setNoms(string $noms): self
    {
        $this->noms = $noms;

        return $this;
    }

    public function getPrenoms(): ?string
    {
        return $this->prenoms;
    }

    public function setPrenoms(string $prenoms): self
    {
        $this->prenoms = $prenoms;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->mot_de_passe;
    }

    public function setMotDePasse(string $mot_de_passe): self
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMobile(): ?int
    {
        return $this->mobile;
    }

    public function setMobile(int $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @return Collection|Etudiant[]
     */
    public function getFormulaire(): Collection
    {
        return $this->formulaire;
    }

    public function addFormulaire(Etudiant $formulaire): self
    {
        if (!$this->formulaire->contains($formulaire)) {
            $this->formulaire[] = $formulaire;
            $formulaire->addFormulaire($this);
        }

        return $this;
    }

    public function removeFormulaire(Etudiant $formulaire): self
    {
        if ($this->formulaire->contains($formulaire)) {
            $this->formulaire->removeElement($formulaire);
            $formulaire->removeFormulaire($this);
        }

        return $this;
    }

}
