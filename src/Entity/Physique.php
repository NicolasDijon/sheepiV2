<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PhysiqueRepository")
 */
class Physique
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
    private $maTaille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $maSilhouette;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesCheveux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesYeux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mesSignesParticuliers;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $monStyle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $saTaille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $saSilhouette;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesCheveux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesYeux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesSignesParticuliers;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sesStyles;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="physique")
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

    public function getMaTaille(): ?string
    {
        return $this->maTaille;
    }

    public function setMaTaille(string $maTaille): self
    {
        $this->maTaille = $maTaille;

        return $this;
    }

    public function getMaSilhouette(): ?string
    {
        return $this->maSilhouette;
    }

    public function setMaSilhouette(string $maSilhouette): self
    {
        $this->maSilhouette = $maSilhouette;

        return $this;
    }

    public function getMesCheveux(): ?string
    {
        return $this->mesCheveux;
    }

    public function setMesCheveux(string $mesCheveux): self
    {
        $this->mesCheveux = $mesCheveux;

        return $this;
    }

    public function getMesYeux(): ?string
    {
        return $this->mesYeux;
    }

    public function setMesYeux(string $mesYeux): self
    {
        $this->mesYeux = $mesYeux;

        return $this;
    }

    public function getMesSignesParticuliers(): ?string
    {
        return $this->mesSignesParticuliers;
    }

    public function setMesSignesParticuliers(string $mesSignesParticuliers): self
    {
        $this->mesSignesParticuliers = $mesSignesParticuliers;

        return $this;
    }

    public function getMonStyle(): ?string
    {
        return $this->monStyle;
    }

    public function setMonStyle(string $monStyle): self
    {
        $this->monStyle = $monStyle;

        return $this;
    }

    public function getSaTaille(): ?string
    {
        return $this->saTaille;
    }

    public function setSaTaille(string $saTaille): self
    {
        $this->saTaille = $saTaille;

        return $this;
    }

    public function getSaSilhouette(): ?string
    {
        return $this->saSilhouette;
    }

    public function setSaSilhouette(string $saSilhouette): self
    {
        $this->saSilhouette = $saSilhouette;

        return $this;
    }

    public function getSesCheveux(): ?string
    {
        return $this->sesCheveux;
    }

    public function setSesCheveux(string $sesCheveux): self
    {
        $this->sesCheveux = $sesCheveux;

        return $this;
    }

    public function getSesYeux(): ?string
    {
        return $this->sesYeux;
    }

    public function setSesYeux(string $sesYeux): self
    {
        $this->sesYeux = $sesYeux;

        return $this;
    }

    public function getSesSignesParticuliers(): ?string
    {
        return $this->sesSignesParticuliers;
    }

    public function setSesSignesParticuliers(string $sesSignesParticuliers): self
    {
        $this->sesSignesParticuliers = $sesSignesParticuliers;

        return $this;
    }

    public function getSesStyles(): ?string
    {
        return $this->sesStyles;
    }

    public function setSesStyles(string $sesStyles): self
    {
        $this->sesStyles = $sesStyles;

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
            $user->setPhysique($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getPhysique() === $this) {
                $user->setPhysique(null);
            }
        }

        return $this;
    }
}
