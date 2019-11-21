<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SituationRepository")
 */
class Situation
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
    private $monSexe;

    /**
     * @ORM\Column(type="integer")
     */
    private $monAge;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $monPays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $monDepartement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $maVille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $monTelephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesEnfants;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesOrigines;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sonSexe;

    /**
     * @ORM\Column(type="integer")
     */
    private $sonAge;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sonPays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesDepartements;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesEnfants;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesOrigines;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="situation")
     */
    private $user;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonSexe(): ?string
    {
        return $this->monSexe;
    }

    public function setMonSexe(string $monSexe): self
    {
        $this->monSexe = $monSexe;

        return $this;
    }

    public function getMonAge(): ?int
    {
        return $this->monAge;
    }

    public function setMonAge(int $monAge): self
    {
        $this->monAge = $monAge;

        return $this;
    }

    public function getMonPays(): ?string
    {
        return $this->monPays;
    }

    public function setMonPays(string $monPays): self
    {
        $this->monPays = $monPays;

        return $this;
    }

    public function getMonDepartement(): ?string
    {
        return $this->monDepartement;
    }

    public function setMonDepartement(string $monDepartement): self
    {
        $this->monDepartement = $monDepartement;

        return $this;
    }

    public function getMaVille(): ?string
    {
        return $this->maVille;
    }

    public function setMaVille(string $maVille): self
    {
        $this->maVille = $maVille;

        return $this;
    }

    public function getMonTelephone(): ?string
    {
        return $this->monTelephone;
    }

    public function setMonTelephone(string $monTelephone): self
    {
        $this->monTelephone = $monTelephone;

        return $this;
    }

    public function getMesEnfants(): ?string
    {
        return $this->mesEnfants;
    }

    public function setMesEnfants(string $mesEnfants): self
    {
        $this->mesEnfants = $mesEnfants;

        return $this;
    }

    public function getMesOrigines(): ?string
    {
        return $this->mesOrigines;
    }

    public function setMesOrigines(string $mesOrigines): self
    {
        $this->mesOrigines = $mesOrigines;

        return $this;
    }

    public function getSonSexe(): ?string
    {
        return $this->sonSexe;
    }

    public function setSonSexe(string $sonSexe): self
    {
        $this->sonSexe = $sonSexe;

        return $this;
    }

    public function getSonAge(): ?int
    {
        return $this->sonAge;
    }

    public function setSonAge(int $sonAge): self
    {
        $this->sonAge = $sonAge;

        return $this;
    }

    public function getSonPays(): ?string
    {
        return $this->sonPays;
    }

    public function setSonPays(string $sonPays): self
    {
        $this->sonPays = $sonPays;

        return $this;
    }

    public function getSesDepartements(): ?string
    {
        return $this->sesDepartements;
    }

    public function setSesDepartements(string $sesDepartements): self
    {
        $this->sesDepartements = $sesDepartements;

        return $this;
    }

    public function getSesEnfants(): ?string
    {
        return $this->sesEnfants;
    }

    public function setSesEnfants(string $sesEnfants): self
    {
        $this->sesEnfants = $sesEnfants;

        return $this;
    }

    public function getSesOrigines(): ?string
    {
        return $this->sesOrigines;
    }

    public function setSesOrigines(string $sesOrigines): self
    {
        $this->sesOrigines = $sesOrigines;

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
            $user->setSituation($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getSituation() === $this) {
                $user->setSituation(null);
            }
        }

        return $this;
    }
}
