<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ThemeRepository")
 */
class Theme
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
    private $type_theme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeTheme(): ?string
    {
        return $this->type_theme;
    }

    public function setTypeTheme(string $type_theme): self
    {
        $this->type_theme = $type_theme;

        return $this;
    }
}
