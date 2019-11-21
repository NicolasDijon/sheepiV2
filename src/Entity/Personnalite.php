<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonnaliteRepository")
 */
class Personnalite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $monNiveauEtude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $monJob;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $monCaractere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sonNiveauEtude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sonCaractere;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="personnalite")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesConvictionsSpirituelles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesPetitesAddictions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesConvictionsSpirituelles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesPetitesAddictions;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonNiveauEtude(): ?string
    {
        return $this->monNiveauEtude;
    }

    public function setMonNiveauEtude(string $monNiveauEtude): self
    {
        $this->monNiveauEtude = $monNiveauEtude;

        return $this;
    }

    public function getMonJob(): ?string
    {
        return $this->monJob;
    }

    public function setMonJob(string $monJob): self
    {
        $this->monJob = $monJob;

        return $this;
    }

    public function getMonCaractere(): ?string
    {
        return $this->monCaractere;
    }

    public function setMonCaractere(string $monCaractere): self
    {
        $this->monCaractere = $monCaractere;

        return $this;
    }

    public function getSonNiveauEtude(): ?string
    {
        return $this->sonNiveauEtude;
    }

    public function setSonNiveauEtude(string $sonNiveauEtude): self
    {
        $this->sonNiveauEtude = $sonNiveauEtude;

        return $this;
    }

    public function getSonCaractere(): ?string
    {
        return $this->sonCaractere;
    }

    public function setSonCaractere(string $sonCaractere): self
    {
        $this->sonCaractere = $sonCaractere;

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
            $user->setPersonnalite($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getPersonnalite() === $this) {
                $user->setPersonnalite(null);
            }
        }

        return $this;
    }

    public function getMesConvictionsSpirituelles(): ?string
    {
        return $this->mesConvictionsSpirituelles;
    }

    public function setMesConvictionsSpirituelles(string $mesConvictionsSpirituelles): self
    {
        $this->mesConvictionsSpirituelles = $mesConvictionsSpirituelles;

        return $this;
    }

    public function getMesPetitesAddictions(): ?string
    {
        return $this->mesPetitesAddictions;
    }

    public function setMesPetitesAddictions(string $mesPetitesAddictions): self
    {
        $this->mesPetitesAddictions = $mesPetitesAddictions;

        return $this;
    }

    public function getSesConvictionsSpirituelles(): ?string
    {
        return $this->sesConvictionsSpirituelles;
    }

    public function setSesConvictionsSpirituelles(string $sesConvictionsSpirituelles): self
    {
        $this->sesConvictionsSpirituelles = $sesConvictionsSpirituelles;

        return $this;
    }

    public function getSesPetitesAddictions(): ?string
    {
        return $this->sesPetitesAddictions;
    }

    public function setSesPetitesAddictions(string $sesPetitesAddictions): self
    {
        $this->sesPetitesAddictions = $sesPetitesAddictions;

        return $this;
    }
}
