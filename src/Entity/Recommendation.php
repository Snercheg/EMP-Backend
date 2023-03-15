<?php

namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/** Recommendation
 *
 * @ORM\Entity
 */
#[ApiResource]


class Recommendation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;
    /**
     * @ORM\Column
     */
    private string $name ='';
    /**
     * @ORM\Column(type="float")
     */
    private float $temperatureMin;
    /**
     * @ORM\Column(type="float")
     */
    private float $temperatureMax;
    /**
     * @ORM\Column(type="float")
     */
    private float $humidityMin;
    /**
     * @ORM\Column(type="float")
     */
    private float $humidityMax;
    /**
     * @ORM\Column(type="float")
     */
    private float $illuminationMin;
    /**
     * @ORM\Column(type="float")
     */
    private float $illuminationMax;
    /**
     * @ORM\Column(type="text")
     */
    private string $descriptionCare;
    /**
     *  @ORM\Column(type="datetime")
     */
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    protected $modifiedAt;

    /**
     * @ORM\Column(type="integer")
     */
    private int $createdBy;
    /**
     * @ORM\Column(type="integer")
     */
    private int $modifiedBy;
    /**
     * @var Type[] Available types from this recommendations
     * @ORM\OneToMany(targetEntity="Type", mappedBy="recommendation")
     */
    private iterable $types;
    public function __construct()
    {
        $this->types = new ArrayCollection();
        $this->settings = new ArrayCollection();
        $this->createdAt = new \DateTime();
        $this->modifiedAt = new \DateTime();
    }
    /**
     * @var Setting[] Available types from this recommendations
     * @ORM\OneToMany(targetEntity="Setting", mappedBy="recommendation")
     */
    private iterable $settings;
    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getTemperatureMin(): float
    {
        return $this->temperatureMin;
    }

    /**
     * @param float $temperatureMin
     */
    public function setTemperatureMin(float $temperatureMin): void
    {
        $this->temperatureMin = $temperatureMin;
    }

    /**
     * @return float
     */
    public function getHumidityMin(): float
    {
        return $this->humidityMin;
    }

    /**
     * @param float $humidityMin
     */
    public function setHumidityMin(float $humidityMin): void
    {
        $this->humidityMin = $humidityMin;
    }

    /**
     * @return float
     */
    public function getIlluminationMin(): float
    {
        return $this->illuminationMin;
    }

    /**
     * @param float $illuminationMin
     */
    public function setIlluminationMin(float $illuminationMin): void
    {
        $this->illuminationMin = $illuminationMin;
    }

    /**
     * @return string
     */
    public function getDescriptionCare(): string
    {
        return $this->descriptionCare;
    }

    /**
     * @param string $descriptionCare
     */
    public function setDescriptionCare(string $descriptionCare): void
    {
        $this->descriptionCare = $descriptionCare;
    }

    /**
     * @return int
     */
    public function getCreatedBy(): int
    {
        return $this->createdBy;
    }

    /**
     * @param int $createdBy
     */
    public function setCreatedBy(int $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return int
     */
    public function getModifiedBy(): int
    {
        return $this->modifiedBy;
    }

    /**
     * @param int $modifiedBy
     */
    public function setModifiedBy(int $modifiedBy): void
    {
        $this->modifiedBy = $modifiedBy;
    }

    /**
     * @return Type[]
     */
    public function getTypes(): iterable|ArrayCollection
    {
        return $this->types;
    }

    /**
     * @return Setting[]|iterable
     */
    public function getSettings()
    {
        return $this->settings;
    }
    /**
     * @return float
     */
    public function getHumidityMax(): float
    {
        return $this->humidityMax;
    }

    /**
     * @param float $humidityMax
     */
    public function setHumidityMax(float $humidityMax): void
    {
        $this->humidityMax = $humidityMax;
    }

    /**
     * @return float
     */
    public function getIlluminationMax(): float
    {
        return $this->illuminationMax;
    }

    /**
     * @param float $illuminationMax
     */
    public function setIlluminationMax(float $illuminationMax): void
    {
        $this->illuminationMax = $illuminationMax;
    }

    /**
     * @return float
     */
    public function getTemperatureMax(): float
    {
        return $this->temperatureMax;
    }

    /**
     * @param float $temperatureMax
     */
    public function setTemperatureMax(float $temperatureMax): void
    {
        $this->temperatureMax = $temperatureMax;
    }


}