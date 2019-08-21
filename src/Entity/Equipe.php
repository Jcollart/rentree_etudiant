<?php

namespace App\Entity;

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
}
