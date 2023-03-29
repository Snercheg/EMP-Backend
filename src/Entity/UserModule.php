<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * A User_module
 * 
 * @ORM\Entity
 */
#[ApiResource]
//type
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
     * The module_id of the User_module
     * 
     * @ORM\Column(type="integer")
     */
    private ?int $module_id = null;
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
    private \DateTime $linkedAt;
     /**
     * @return ?int
     */
    public function getModule_id(): ?int{
        return $this->module_id;
    }
    /**
     * @param ?int $module_id
     */
    public function setModule_id(?int $module_id): void{
        $this->module_id = $module_id;
    }

    
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
    public function getLinked_at():  ?\DateTimeInterface{
        return $this->linked_at;
    }
    /**
     * @param ?\DateTimeInterface $linked_at
     */
    public function setLinked_at( ?\DateTimeInterface $linked_at): void{
        $this->linked_at = $linked_at;
    }
    public function __construct()
    {
        $this->$linkedAt = new \DateTime();
    }

    
}