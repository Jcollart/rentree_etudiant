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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\theme")
     * @ORM\JoinColumn(nullable=false)
     */
    private $theme;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\administration", inversedBy="ajoute")
     */
    private $administration;

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

    public function getTheme(): ?theme
    {
        return $this->theme;
    }

    public function setTheme(?theme $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function getAdministration(): ?administration
    {
        return $this->administration;
    }

    public function setAdministration(?administration $administration): self
    {
        $this->administration = $administration;

        return $this;
    }
}
