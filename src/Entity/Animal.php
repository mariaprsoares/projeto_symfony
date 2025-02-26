<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nome_animal = null;

    #[ORM\Column(length: 255)]
    private ?string $especie = null;

    #[ORM\Column]
    private ?int $idade = null;

    #[ORM\Column]
    private ?int $id_dono = null;

    #[ORM\Column]
    private ?int $id_veterinario = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
