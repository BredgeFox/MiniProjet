<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeRepository::class)
 */
class Type
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
    // private $idType;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $libelleType;

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getIdType(): ?int
    // {
    //     return $this->idType;
    // }
    //
    // public function setIdType(int $idType): self
    // {
    //     $this->idType = $idType;
    //
    //     return $this;
    // }

    public function getLibelleType(): ?string
    {
        return $this->libelleType;
    }

    public function setLibelleType(string $libelleType): self
    {
        $this->libelleType = $libelleType;

        return $this;
    }
}
