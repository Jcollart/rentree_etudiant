<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdministrationRepository")
 */
class Administration
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
    private $noms_administration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenoms_administration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo_administration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mot_de_passe_administration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_administration;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomsAdministration(): ?string
    {
        return $this->noms_administration;
    }

    public function setNomsAdministration(string $noms_administration): self
    {
        $this->noms_administration = $noms_administration;

        return $this;
    }

    public function getPrenomsAdministration(): ?string
    {
        return $this->prenoms_administration;
    }

    public function setPrenomsAdministration(string $prenoms_administration): self
    {
        $this->prenoms_administration = $prenoms_administration;

        return $this;
    }

    public function getPseudoAdministration(): ?string
    {
        return $this->pseudo_administration;
    }

    public function setPseudoAdministration(string $pseudo_administration): self
    {
        $this->pseudo_administration = $pseudo_administration;

        return $this;
    }

    public function getMotDePasseAdministration(): ?string
    {
        return $this->mot_de_passe_administration;
    }

    public function setMotDePasseAdministration(string $mot_de_passe_administration): self
    {
        $this->mot_de_passe_administration = $mot_de_passe_administration;

        return $this;
    }

    public function getEmailAdministration(): ?string
    {
        return $this->email_administration;
    }

    public function setEmailAdministration(string $email_administration): self
    {
        $this->email_administration = $email_administration;

        return $this;
    }
}
