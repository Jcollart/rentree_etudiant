<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormulaireRepository")
 */
class Formulaire
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
    private $type_formulaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etablissement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $equipe;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Formulaire", mappedBy="remplirform")
     */
    private $etudiant;

    public function __construct()
    {
        $this->etudiant = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeFormulaire(): ?string
    {
        return $this->type_formulaire;
    }

    public function setTypeFormulaire(string $type_formulaire): self
    {
        $this->type_formulaire = $type_formulaire;

        return $this;
    }

    public function getEtablissement(): ?string
    {
        return $this->etablissement;
    }

    public function setEtablissement(string $etablissement): self
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    public function getEquipe(): ?string
    {
        return $this->equipe;
    }

    public function setEquipe(string $equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * @return Collection|Formulaire[]
     */
    public function getEtudiant(): Collection
    {
        return $this->etudiant;
    }

    public function addEtudiant(Formulaire $etudiant): self
    {
        if (!$this->etudiant->contains($etudiant)) {
            $this->etudiant[] = $etudiant;
            $etudiant->addRemplirform($this);
        }

        return $this;
    }

    public function removeEtudiant(Formulaire $etudiant): self
    {
        if ($this->etudiant->contains($etudiant)) {
            $this->etudiant->removeElement($etudiant);
            $etudiant->removeRemplirform($this);
        }

        return $this;
    }
}
