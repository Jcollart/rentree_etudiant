<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EquipeRepository")
 */
class Equipe
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
    private $Nom_Equipe;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Formulaire", inversedBy="Relation")
     */
    private $Relation;

    public function __construct()
    {
        $this->Relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEquipe(): ?string
    {
        return $this->Nom_Equipe;
    }

    public function setNomEquipe(string $Nom_Equipe): self
    {
        $this->Nom_Equipe = $Nom_Equipe;

        return $this;
    }

    /**
     * @return Collection|Formulaire[]
     */
    public function getRelation(): Collection
    {
        return $this->Relation;
    }

    public function addRelation(Formulaire $relation): self
    {
        if (!$this->Relation->contains($relation)) {
            $this->Relation[] = $relation;
        }

        return $this;
    }

    public function removeRelation(Formulaire $relation): self
    {
        if ($this->Relation->contains($relation)) {
            $this->Relation->removeElement($relation);
        }

        return $this;
    }
}
