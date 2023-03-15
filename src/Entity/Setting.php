<?php

namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * A setting
 * 
 * @ORM\Entity
 */
#[ApiResource]
class Setting {
    /**
     * The id of the setting
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;
    /**
     * The name of the setting
     * 
     * @ORM\Column
     */
    private string $name = '';
    /**
     * The temperature_range of the setting
     * 
     * @ORM\Column(type="float")
     */
    private ?float $temperature_setting = null;
    /**
     * The humidity_range of the setting
     * 
     * @ORM\Column(type="float")
     */
    private ?float $humidity_setting = null;
    /**
     * The illumination_range of the setting
     * 
     * @ORM\Column(type="float")
     */
    private ?float  $illumination_setting = null;
    /**
     * @ORM\ManyToOne(targetEntity="Recommendation", inversedBy="settings")
     */
    private ?Recommendation $recommendation = null;
    /**
     * @return Recommendation|null
     */
    public function getRecommendationId(): ?Recommendation
    {
        return $this->recommendation;
    }
    /**
     * @param Recommendation|null $recommendation
     */
    public function setRecommendationId(?Recommendation $recommendation): void
    {
        $this->recommendation = $recommendation;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
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
     * @return ?float
     */
    public function getTemperatureSetting(): ?float{
        return $this->temperature_setting;
    }
    /**
     * @param ?float $temperature_setting
     */
    public function setTemperatureSetting(?float $temperature_setting): void{
        $this->temperature_setting = $temperature_setting;
    }
     /**
     * @return ?float
     */
    public function getHumiditySetting(): ?float{
        return $this->humidity_setting;
    }
    /**
     * @param ?float $humidity_setting
     */
    public function setHumiditySetting(?float $humidity_setting): void{
        $this->humidity_setting = $humidity_setting;
    }


     /**
     * @return ?float
     */
    public function getIlluminationSetting():  ?float{
        return $this->illumination_setting;
    }
    /**
     * @param ?float
     */
    public function setIlluminationSetting(?float $illumination_setting): void{
        $this->illumination_setting = $illumination_setting;
    }
    /**
     * @var Module[] Available types from this settingId
     * @ORM\OneToMany(targetEntity="Module", mappedBy="settingId")
     */
    private iterable $modules;
    /**
     * @return Module[]
     */
    public function getModules(): iterable|ArrayCollection
    {
        return $this->modules;
    }
    public function __construct()
    {
        $this->modules = new ArrayCollection();
    }
}