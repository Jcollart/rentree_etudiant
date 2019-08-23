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
    private $noms_equipe;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Formulaire", mappedBy="relation")
     */
    private $relation;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Equipe", mappedBy="liste_point")
     */
    private $liste_point;

    public function __construct()
    {
        $this->relation = new ArrayCollection();
        $this->liste_point = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomsEquipe(): ?string
    {
        return $this->noms_equipe;
    }

    public function setNomsEquipe(string $noms_equipe): self
    {
        $this->noms_equipe = $noms_equipe;

        return $this;
    }

    /**
     * @return Collection|Formulaire[]
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(Formulaire $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation[] = $relation;
            $relation->addRelation($this);
        }

        return $this;
    }

    public function removeRelation(Formulaire $relation): self
    {
        if ($this->relation->contains($relation)) {
            $this->relation->removeElement($relation);
            $relation->removeRelation($this);
        }

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getListePoint(): Collection
    {
        return $this->liste_point;
    }

    public function addListePoint(Equipe $listePoint): self
    {
        if (!$this->liste_point->contains($listePoint)) {
            $this->liste_point[] = $listePoint;
            $listePoint->addListePoint($this);
        }

        return $this;
    }

    public function removeListePoint(Equipe $listePoint): self
    {
        if ($this->liste_point->contains($listePoint)) {
            $this->liste_point->removeElement($listePoint);
            $listePoint->removeListePoint($this);
        }

        return $this;
    }
}
