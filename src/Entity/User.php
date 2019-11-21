<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 * fields={"email"},
 * message="L'email que vous avez indiqué est déja utilisé!"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire minimum 8 caractères.")
     */
    private $password;

    /**
     * @Assert\EqualTo(propertyPath="password", message="Vous n'avez pas tapé le même mot de passe.")
     */
    public $confirm_password;

    /**
    * @ORM\Column(type="json")
    */
    private $roles = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userName;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Situation", inversedBy="user")
     */
    private $situation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Physique", inversedBy="user")
     */
    private $physique;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Personnalite", inversedBy="user")
     */
    private $personnalite;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Passion", inversedBy="user")
     */
    private $passion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reglage", inversedBy="user")
     */
    private $reglage;

    public function __construct() {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function eraseCredentials(){}

    public function getSalt(){}

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
    
        return array_unique($roles);
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getSituation(): ?Situation
    {
        return $this->situation;
    }

    public function setSituation(?Situation $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    function getIsActive() {
        return $this->isActive;
    }

    function setIsActive($isActive) {
        $this->isActive = $isActive;
    }

    public function getPhysique(): ?Physique
    {
        return $this->physique;
    }

    public function setPhysique(?Physique $physique): self
    {
        $this->physique = $physique;

        return $this;
    }

    public function getPersonnalite(): ?Personnalite
    {
        return $this->personnalite;
    }

    public function setPersonnalite(?Personnalite $personnalite): self
    {
        $this->personnalite = $personnalite;

        return $this;
    }

    public function getPassion(): ?Passion
    {
        return $this->passion;
    }

    public function setPassion(?Passion $passion): self
    {
        $this->passion = $passion;

        return $this;
    }

    public function getReglage(): ?Reglage
    {
        return $this->reglage;
    }

    public function setReglage(?Reglage $reglage): self
    {
        $this->reglage = $reglage;

        return $this;
    }
}
