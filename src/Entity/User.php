<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $u_id = null;

    #[ORM\Column(length: 255)]
    private ?string $pass = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUId(): ?string
    {
        return $this->u_id;
    }

    public function setUId(string $u_id): self
    {
        $this->u_id = $u_id;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setPass(string $pass): self
    {
        $this->pass = $pass;

        return $this;
    }
}
