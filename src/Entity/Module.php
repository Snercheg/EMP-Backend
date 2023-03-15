<?php
/**
 * Created by PhpStorm.
 * User: ufromsx
 * Date: 05.03.23
 * Time: 22:08
 */

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * A module
 *
 * @ORM\Entity
 */
#[ApiResource]

class Module
{
    /**
     * The id of the module
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }



    /**
     * Api key of the module
     *
     * @ORM\Column(type="integer")
     */
    private string $api_key = '';

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->api_key;
    }




    /**
     * @ORM\ManyToOne(targetEntity="Setting", inversedBy="modules")
     */
    private ?Setting $settingId = null;
    /**
     * @return Setting|null
     */
    public function getSettingId(): ?Setting
    {
        return $this->settingId;
    }
    /**
     * @param Setting|null $settingId
     */
    public function setSettingId(?Setting $settingId): void
    {
        $this->settingId = $settingId;
    }





    /**
     * @ORM\ManyToOne(targetEntity="Type", inversedBy="modules")
     */
    private ?Type $typeId = null;
    /**
     * @return Type|null
     */
    public function getTypeId(): ?Type
    {
        return $this->typeId;
    }
    /**
     * @param Type|null typeId
     */
    public function setTypeId(?Type $typeId): void
    {
        $this->typeId = $typeId;
    }




    /**
     * Status info
     *
     * @ORM\Column(type="text")
     */
    public string $status = 'StAtUs';
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }



    /**
     * @var UserModule[] UserModule of this module
     *
     * @ORM\OneToMany(
     *     targetEntity="UserModule",
     *     mappedBy="moduleId")
     */
    private iterable $userModules;

    /**
     * @return iterable
     */
    public function getUserModules(): iterable|ArrayCollection
    {
        return $this->userModules;
    }


    /**
     * @var Data[] datas of this module
     *
     * @ORM\OneToMany(
     *     targetEntity="Data",
     *     mappedBy="module")
     */
    private iterable $datas;

    public function __construct()
    {
        $this->datas = new ArrayCollection();
        $this->userModules = new ArrayCollection();
    }

    /**
     * @return iterable
     */
    public function getDatas(): iterable|ArrayCollection
    {
        return $this->datas;
    }
}