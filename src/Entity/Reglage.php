<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReglageRepository")
 */
class Reglage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $perso;

    /**
     * @ORM\Column(type="integer")
     */
    private $physique;

    /**
     * @ORM\Column(type="integer")
     */
    private $personnalite;

    /**
     * @ORM\Column(type="integer")
     */
    private $geographie;

    /**
     * @ORM\Column(type="integer")
     */
    private $scolarite;

    /**
     * @ORM\Column(type="integer")
     */
    private $passions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="reglage")
     */
    private $user;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $email;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPerso(): ?int
    {
        return $this->perso;
    }

    public function setPerso(int $perso): self
    {
        $this->perso = $perso;

        return $this;
    }

    public function getPhysique(): ?int
    {
        return $this->physique;
    }

    public function setPhysique(int $physique): self
    {
        $this->physique = $physique;

        return $this;
    }

    public function getPersonnalite(): ?int
    {
        return $this->personnalite;
    }

    public function setPersonnalite(int $personnalite): self
    {
        $this->personnalite = $personnalite;

        return $this;
    }

    public function getGeographie(): ?int
    {
        return $this->geographie;
    }

    public function setGeographie(int $geographie): self
    {
        $this->geographie = $geographie;

        return $this;
    }

    public function getScolarite(): ?int
    {
        return $this->scolarite;
    }

    public function setScolarite(int $scolarite): self
    {
        $this->scolarite = $scolarite;

        return $this;
    }

    public function getPassions(): ?int
    {
        return $this->passions;
    }

    public function setPassions(int $passions): self
    {
        $this->passions = $passions;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(User $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
            $user->setReglage($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getReglage() === $this) {
                $user->setReglage(null);
            }
        }

        return $this;
    }

    public function getTelephone(): ?bool
    {
        return $this->telephone;
    }

    public function setTelephone(?bool $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?bool
    {
        return $this->email;
    }

    public function setEmail(?bool $email): self
    {
        $this->email = $email;

        return $this;
    }
}
