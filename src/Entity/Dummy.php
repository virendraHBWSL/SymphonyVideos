<?php

namespace App\Entity;

use App\Repository\DummyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DummyRepository::class)]
class Dummy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
