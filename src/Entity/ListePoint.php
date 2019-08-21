<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ListePointRepository")
 */
class ListePoint
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $code_point;

    /**
     * @ORM\Column(type="text")
     */
    private $question_point;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reponse1_point;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reponse2_point;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reponse3_point;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePoint(): ?int
    {
        return $this->code_point;
    }

    public function setCodePoint(int $code_point): self
    {
        $this->code_point = $code_point;

        return $this;
    }

    public function getQuestionPoint(): ?string
    {
        return $this->question_point;
    }

    public function setQuestionPoint(string $question_point): self
    {
        $this->question_point = $question_point;

        return $this;
    }

    public function getReponse1Point(): ?string
    {
        return $this->reponse1_point;
    }

    public function setReponse1Point(string $reponse1_point): self
    {
        $this->reponse1_point = $reponse1_point;

        return $this;
    }

    public function getReponse2Point(): ?string
    {
        return $this->reponse2_point;
    }

    public function setReponse2Point(string $reponse2_point): self
    {
        $this->reponse2_point = $reponse2_point;

        return $this;
    }

    public function getReponse3Point(): ?string
    {
        return $this->reponse3_point;
    }

    public function setReponse3Point(string $reponse3_point): self
    {
        $this->reponse3_point = $reponse3_point;

        return $this;
    }
}
