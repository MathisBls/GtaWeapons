<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ArmesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArmesRepository::class)]
#[ApiResource]
class Armes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'armes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categories $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'armes', targetEntity: Degats::class)]
    private Collection $degats;

    public function __construct()
    {
        $this->degats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?Categories
    {
        return $this->categorie;
    }

    public function setCategorie(?Categories $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Degats>
     */
    public function getDegats(): Collection
    {
        return $this->degats;
    }

    public function addDegat(Degats $degat): static
    {
        if (!$this->degats->contains($degat)) {
            $this->degats->add($degat);
            $degat->setArmes($this);
        }

        return $this;
    }

    public function removeDegat(Degats $degat): static
    {
        if ($this->degats->removeElement($degat)) {
            // set the owning side to null (unless already changed)
            if ($degat->getArmes() === $this) {
                $degat->setArmes(null);
            }
        }

        return $this;
    }
}
