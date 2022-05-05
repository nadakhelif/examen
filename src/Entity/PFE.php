<?php

namespace App\Entity;

use App\Repository\PFERepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PFERepository::class)]
class PFE
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $titre;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $student;

    #[ORM\ManyToOne(targetEntity: Entreprise::class, inversedBy: 'pFEs')]
    #[ORM\JoinColumn(nullable: false)]
    private $entreprise;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getStudent(): ?string
    {
        return $this->student;
    }

    public function setStudent(?string $student): self
    {
        $this->student = $student;

        return $this;
    }

    public function getEntreprise(): ?Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(?Entreprise $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }
   
}
