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
 * A data
 * @ORM\Entity
 */
#[ApiResource]

class Data
{
    /**
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
     * Humidity (percent)
     *
     * @ORM\Column(type="float")
     */
    public ?float $humidity = null;


    /**
     * @return string
     */
    public function getHumidity(): string
    {
        return $this->humidity;
    }

    /**
     * Temperature (celsius)
     *
     * @ORM\Column(type="float")
     */
    public ?float $temperature = null;

    /**
     * @return string
     */
    public function getTemperature(): string
    {
        return $this->temperature;
    }

    /**
     * Illumination (lux)
     *
     * @ORM\Column(type="integer")
     */
    public ?int $illumination = null;

    /**
     * @return string
     */
    public function getIllumination(): string
    {
        return $this->illumination;
    }

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $measurementsDate;

    /**
     * @return \DateTime
     */
    public function getMeasurementsDate()
    {
        return $this->measurementsDate;
    }
    public function __construct()
    {
        $this->measurementsDate = new \DateTime();
    }
    /**
     *
     * @ORM\ManyToOne(targetEntity="Module", inversedBy="datas")
     */
    private ?Module $module = null;
    /**
     * @return ?Module|null
     */
    public function getModuleId(): ?Module
    {
        return $this->module;
    }
    /**
     * @param ?Module|null $module
     */
    public function setModuleId(?Module $module): void
    {
        $this->module = $module;
    }

}