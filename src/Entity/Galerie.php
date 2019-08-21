<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GalerieRepository")
 */
class Galerie
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
    private $noms_image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomsImage(): ?string
    {
        return $this->noms_image;
    }

    public function setNomsImage(string $noms_image): self
    {
        $this->noms_image = $noms_image;

        return $this;
    }
}
