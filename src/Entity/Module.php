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
     * The id of the settings
     *
     * @ORM\Column(type="integer")
     */
    private ?int $settings_id = null;

    /**
     * @return int|null
     */
    public function getSettingsId(): ?int
    {
        return $this->settings_id;
    }


    /**
     * The id of the type
     *
     * @ORM\Column(type="integer")
     */
    private ?int $type_id = null;

    /**
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->type_id;
    }

    /**
     * The id of the module_type
     *
     * @ORM\Column(type="integer")
     */
    private ?int $module_type_id = null;

    /**
     * @return int|null
     */
    public function getModuleTypeId(): ?int
    {
        return $this->module_type_id;
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
     * @var Data[] datas of this module
     *
     * @ORM\OneToMany(
     *     targetEntity="Data",
     *     mappedBy="module",
     *     cascade={"persist", "remove"})
     */
    private iterable $datas;

    public function __construct()
    {
        $this->datas = new ArrayCollection();
    }

    /**
     * @return iterable
     */
    public function getDatas(): iterable|ArrayCollection
    {
        return $this->datas;
    }



}
