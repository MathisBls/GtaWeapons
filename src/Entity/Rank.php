<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\RankRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RankRepository::class)]
#[ORM\Table(name: '`rank`')]
#[ApiResource]
class Rank
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $img = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNum(): ?int
    {
        return $this->img;
    }

    public function setNum(string $img): static
    {
        $this->img = $img;

        return $this;
    }
}
