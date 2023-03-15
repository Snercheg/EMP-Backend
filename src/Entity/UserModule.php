<?php

namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;


/**
 * A User_module
 * 
 * @ORM\Entity
 */
#[ApiResource]

class UserModule {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;
    /**
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="UserModules")
    */
    private ?User $userId = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return User|null
     */
    public function getUserId(): ?User
    {
        return $this->userId;
    }
    /**
     * @param User|null $userId
     */
    public function setUserId(?User $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Module", inversedBy="userModules")
     */
    private ?Module $moduleId = null;
    /**
     * @return Module|null
     */
    public function getModuleId(): ?Module
    {
        return $this->moduleId;
    }
    /**
     * @param Module|null $moduleId
     */
    public function setModuleId(?Module $moduleId): void
    {
        $this->moduleId = $moduleId;
    }
    /**
     * The name of the User_module
     * 
     * @ORM\Column
     */
    private string $name = '';
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    protected $linkedAt;

    
     /**
     * @return string
     */
    public function getName(): string{
        return $this->name;
    }
    /**
     * @param string $name
     */
    public function setName(string $name): void{
        $this->name = $name;
    }


     /**
     * @return ?\DateTimeInterface
     */
    public function getLinkedAt():  ?\DateTimeInterface{
        return $this->linkedAt;
    }

    public function __construct()
    {
        $this->linkedAt = new \DateTime();
    }

    
}