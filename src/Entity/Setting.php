<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
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
    private ?float $temperature_range = null;
    /**
     * The humidity_range of the setting
     * 
     * @ORM\Column(type="float")
     */
    private ?float $humidity_range = null;
    /**
     * The illumination_range of the setting
     * 
     * @ORM\Column(type="float")
     */
    private ?float  $illumination_range = null;
   

    


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
    public function getTemperature_range(): ?float{
        return $this->temperature_range;
    }
    /**
     * @param ?float $temperature_range
     */
    public function setTemperature_range(?float $temperature_range): void{
        $this->temperature_range = $temperature_range;
    }

    
     /**
     * @return ?float
     */
    public function getHumidity_range(): ?float{
        return $this->humidity_range;
    }
    /**
     * @param ?float $humidity_range
     */
    public function setHumidity_range(?float $humidity_range): void{
        $this->humidity_range = $humidity_range;
    }


     /**
     * @return ?float
     */
    public function getIllumination_range():  ?float{
        return $this->illumination_range;
    }
    /**
     * @param ?float $created_at
     */
    public function setIllumination_range( ?float $illumination_range): void{
        $this->illumination_range = $illumination_range;
    }


    
}