<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TemoignageRepository")
 */
class Temoignage
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
    private $noms_temoignage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo_temoignage;

    /**
     * @ORM\Column(type="text")
     */
    private $temoignage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomsTemoignage(): ?string
    {
        return $this->noms_temoignage;
    }

    public function setNomsTemoignage(string $noms_temoignage): self
    {
        $this->noms_temoignage = $noms_temoignage;

        return $this;
    }

    public function getPhotoTemoignage(): ?string
    {
        return $this->photo_temoignage;
    }

    public function setPhotoTemoignage(?string $photo_temoignage): self
    {
        $this->photo_temoignage = $photo_temoignage;

        return $this;
    }

    public function getTemoignage(): ?string
    {
        return $this->temoignage;
    }

    public function setTemoignage(string $temoignage): self
    {
        $this->temoignage = $temoignage;

        return $this;
    }
}
