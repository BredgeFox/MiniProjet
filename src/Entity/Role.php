<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 */
class Role
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    // /**
    //  * @ORM\Column(type="integer")
    //  */
    // private $idRole;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $libelleRole;

    // public function getId(): ?int
    // {
    //     return $this->id;
    // }
    //
    // public function getIdRole(): ?int
    // {
    //     return $this->idRole;
    // }

    public function setIdRole(int $idRole): self
    {
        $this->idRole = $idRole;

        return $this;
    }

    public function getLibelleRole(): ?string
    {
        return $this->libelleRole;
    }

    public function setLibelleRole(string $libelleRole): self
    {
        $this->libelleRole = $libelleRole;

        return $this;
    }
}
