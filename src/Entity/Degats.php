<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DegatsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DegatsRepository::class)]
#[ApiResource]
class Degats
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'degats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Armes $armes = null;

    #[ORM\ManyToOne(inversedBy: 'degats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?PartieduCorps $partieducorps = null;

    #[ORM\Column]
    private ?int $degats = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArmes(): ?Armes
    {
        return $this->armes;
    }

    public function setArmes(?Armes $armes): static
    {
        $this->armes = $armes;

        return $this;
    }

    public function getPartieducorps(): ?PartieduCorps
    {
        return $this->partieducorps;
    }

    public function setPartieducorps(?PartieduCorps $partieducorps): static
    {
        $this->partieducorps = $partieducorps;

        return $this;
    }

    public function getDegats(): ?int
    {
        return $this->degats;
    }

    public function setDegats(int $degats): static
    {
        $this->degats = $degats;

        return $this;
    }
}
