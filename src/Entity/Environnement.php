<?php

namespace App\Entity;

use App\Repository\EnvironnementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnvironnementRepository::class)
 */
class Environnement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Environnement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnvironnement(): ?string
    {
        return $this->Environnement;
    }

    public function setEnvironnement(string $Environnement): self
    {
        $this->Environnement = $Environnement;

        return $this;
    }
}
