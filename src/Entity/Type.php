<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    //@ORM\OneToMany(targetEntity=Evenement::class, mappedBy="idType")

    // /**
    //  * @ORM\Column(type="integer")
    //  */
    // private $idType;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $libelleType;

    /**
     * @ORM\OneToMany(targetEntity=Evenement::class, mappedBy="idType")
     */
    private $evenements;

    public function __construct()
    {
        $this->evenements = new ArrayCollection();
    }

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

    /**
     * @return Collection|Evenement[]
     */
    public function getEvenements(): Collection
    {
        return $this->evenements;
    }

    /**
     * @return Collection|Evenement[]
     */
    public function GetEvenementNonExpires(TypeRepository $tr): Collection
    {
        //$vretour = array();

        // foreach($this->getEvenements() as $key => $evenement)
        // {
        //     /*if($evenement['dateDebut'] > (new \DateTime)->format('Y/d/m'))
        //     {
        //         $vretour[] = $evenement;
        //     }*/
        //
        //     foreach($evenement as $champ => $value)
        //     {
        //
        //     }
        // }
        //
        // return $this->evenements;

        return $tr->GetEvenementNonExpires($this);
    }

    /**
     * @return Collection|Evenement[]
     */
    public function GetEvenementExpires(TypeRepository $tr): Collection
    {
        //$vretour = array();

        // foreach($this->getEvenements() as $key => $evenement)
        // {
        //     /*if($evenement['dateDebut'] <= (new \DateTime)->format('Y/d/m'))
        //     {
        //         $vretour[] = $evenement;
        //     }*/
        //
        //     foreach($evenement as $champ => $value)
        //     {
        //
        //     }
        // }
        //
        // return $this->evenements;
    }

    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements[] = $evenement;
            $evenement->setIdType($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getIdType() === $this) {
                $evenement->setIdType(null);
            }
        }

        return $this;
    }
}
