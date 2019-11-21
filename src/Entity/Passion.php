<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PassionRepository")
 */
class Passion
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
    private $mesActivitesSportives;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesActivitesNaturelles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesActivitesArtistiques;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesActivitesCerebrales;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesDivertissements;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesActivitesSportives;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesActivitesNaturelles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesActivitesArtistiques;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesActivitesCerebrales;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesDivertissements;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="passion")
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

    public function getMesActivitesSportives(): ?string
    {
        return $this->mesActivitesSportives;
    }

    public function setMesActivitesSportives(string $mesActivitesSportives): self
    {
        $this->mesActivitesSportives = $mesActivitesSportives;

        return $this;
    }

    public function getMesActivitesNaturelles(): ?string
    {
        return $this->mesActivitesNaturelles;
    }

    public function setMesActivitesNaturelles(string $mesActivitesNaturelles): self
    {
        $this->mesActivitesNaturelles = $mesActivitesNaturelles;

        return $this;
    }

    public function getMesActivitesArtistiques(): ?string
    {
        return $this->mesActivitesArtistiques;
    }

    public function setMesActivitesArtistiques(string $mesActivitesArtistiques): self
    {
        $this->mesActivitesArtistiques = $mesActivitesArtistiques;

        return $this;
    }

    public function getMesActivitesCerebrales(): ?string
    {
        return $this->mesActivitesCerebrales;
    }

    public function setMesActivitesCerebrales(string $mesActivitesCerebrales): self
    {
        $this->mesActivitesCerebrales = $mesActivitesCerebrales;

        return $this;
    }

    public function getMesDivertissements(): ?string
    {
        return $this->mesDivertissements;
    }

    public function setMesDivertissements(string $mesDivertissements): self
    {
        $this->mesDivertissements = $mesDivertissements;

        return $this;
    }

    public function getSesActivitesSportives(): ?string
    {
        return $this->sesActivitesSportives;
    }

    public function setSesActivitesSportives(string $sesActivitesSportives): self
    {
        $this->sesActivitesSportives = $sesActivitesSportives;

        return $this;
    }

    public function getSesActivitesNaturelles(): ?string
    {
        return $this->sesActivitesNaturelles;
    }

    public function setSesActivitesNaturelles(string $sesActivitesNaturelles): self
    {
        $this->sesActivitesNaturelles = $sesActivitesNaturelles;

        return $this;
    }

    public function getSesActivitesArtistiques(): ?string
    {
        return $this->sesActivitesArtistiques;
    }

    public function setSesActivitesArtistiques(string $sesActivitesArtistiques): self
    {
        $this->sesActivitesArtistiques = $sesActivitesArtistiques;

        return $this;
    }

    public function getSesActivitesCerebrales(): ?string
    {
        return $this->sesActivitesCerebrales;
    }

    public function setSesActivitesCerebrales(string $sesActivitesCerebrales): self
    {
        $this->sesActivitesCerebrales = $sesActivitesCerebrales;

        return $this;
    }

    public function getSesDivertissements(): ?string
    {
        return $this->sesDivertissements;
    }

    public function setSesDivertissements(string $sesDivertissements): self
    {
        $this->sesDivertissements = $sesDivertissements;

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
            $user->setPassion($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getPassion() === $this) {
                $user->setPassion(null);
            }
        }

        return $this;
    }
}
