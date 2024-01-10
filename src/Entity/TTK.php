<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TTKRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TTKRepository::class)]
#[ApiResource]
class TTK
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $timetokill = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTimetokill(): ?float
    {
        return $this->timetokill;
    }

    public function setTimetokill(float $timetokill): static
    {
        $this->timetokill = $timetokill;

        return $this;
    }
}
