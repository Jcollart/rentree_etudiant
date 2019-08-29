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
    private $Type_Formulaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Etablissement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Equipe;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Etudiant", mappedBy="remplirform")
     */
    private $Etudiant;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Etudiant", inversedBy="Remplirform")
     */
    private $Remplirform;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Equipe", mappedBy="Relation")
     */
    private $Relation;

    public function __construct()
    {
        $this->Etudiant = new ArrayCollection();
        $this->Remplirform = new ArrayCollection();
        $this->Relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeFormulaire(): ?string
    {
        return $this->Type_Formulaire;
    }

    public function setTypeFormulaire(string $Type_Formulaire): self
    {
        $this->Type_Formulaire = $Type_Formulaire;

        return $this;
    }

    public function getEtablissement(): ?string
    {
        return $this->Etablissement;
    }

    public function setEtablissement(string $Etablissement): self
    {
        $this->Etablissement = $Etablissement;

        return $this;
    }

    public function getEquipe(): ?string
    {
        return $this->Equipe;
    }

    public function setEquipe(string $Equipe): self
    {
        $this->Equipe = $Equipe;

        return $this;
    }

    /**
     * @return Collection|Etudiant[]
     */
    public function getEtudiant(): Collection
    {
        return $this->Etudiant;
    }

    public function addEtudiant(Etudiant $etudiant): self
    {
        if (!$this->Etudiant->contains($etudiant)) {
            $this->Etudiant[] = $etudiant;
            $etudiant->addRemplirform($this);
        }

        return $this;
    }

    public function removeEtudiant(Etudiant $etudiant): self
    {
        if ($this->Etudiant->contains($etudiant)) {
            $this->Etudiant->removeElement($etudiant);
            $etudiant->removeRemplirform($this);
        }

        return $this;
    }

    /**
     * @return Collection|Etudiant[]
     */
    public function getRemplirform(): Collection
    {
        return $this->Remplirform;
    }

    public function addRemplirform(Etudiant $remplirform): self
    {
        if (!$this->Remplirform->contains($remplirform)) {
            $this->Remplirform[] = $remplirform;
        }

        return $this;
    }

    public function removeRemplirform(Etudiant $remplirform): self
    {
        if ($this->Remplirform->contains($remplirform)) {
            $this->Remplirform->removeElement($remplirform);
        }

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getRelation(): Collection
    {
        return $this->Relation;
    }

    public function addRelation(Equipe $relation): self
    {
        if (!$this->Relation->contains($relation)) {
            $this->Relation[] = $relation;
            $relation->addRelation($this);
        }

        return $this;
    }

    public function removeRelation(Equipe $relation): self
    {
        if ($this->Relation->contains($relation)) {
            $this->Relation->removeElement($relation);
            $relation->removeRelation($this);
        }

        return $this;
    }
}
