<?php
/**
 * Created by PhpStorm.
 * User: ufromsx
 * Date: 05.03.23
 * Time: 22:08
 */

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * A data
 *
 * @ORM\Entity
 * @ORM\Table(
 *     name="data",
 *     uniqueConstraints={
 *         @ORM\UniqueConstraint(name="composite_idx", columns={"module_id", "measurements_date"})
 *     }
 * )
 */
#[ApiResource]

class Data
{
    /**
     * The id of the module_id
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private ?int $module_id = null;

    /**
     * @return string
     */
    public function getModule_id(): string
    {
        return $this->module_id;
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
     * This is all measurements date
     *
     * @ORM\Id
     * @ORM\Column(type="datetime")
     */
    public ?\DateTimeInterface $measurements_date = null;

    /**
     * @return \DateTimeInterface|null $measurements_date
     */
    public function getMeasurements_date(\DateTimeInterface|null $measurements_date): void
    {
        $this->measurements_date = $measurements_date;
    }

    /**
     * The module of the date
     *
     * @ORM\ManyToOne(
     *     targetEntity="Module",
     *     inversedBy="datas")
     */
    private ?Module $module = null;


    /**
     * @param int|null $module_id
     */
    public function setModuleId(?int $module_id): void
    {
        $this->module_id = $module_id;
    }

    /**
     * @return int|null
     */
    public function getModuleId(): ?int
    {
        return $this->module_id;
    }





}