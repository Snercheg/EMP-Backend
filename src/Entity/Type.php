<?php


namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Tests\Fixtures\ArrayAccessible;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/** A Type
 *
 * @ORM\Entity
 */
#[ApiResource]

class Type
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
    private string $description ='';
    /**
     * @ORM\Column(type="integer")
     */
    private int $recommendationId;
    /**
     * @ORM\Column(type="integer")
     */
    private int $createdBy;
    /**
     * @ORM\Column(type="datetime")
     */
    public string $modifiedAt ='';
    /**
     * @ORM\Column(type="integer")
     */
    private int $modifiedBy;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
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
     * @return string
     */
    public function getModifiedAt(): string
    {
        return $this->modifiedAt;
    }

    /**
     * @param string $modifiedAt
     */
    public function setModifiedAt(string $modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
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
     * @return ArrayCollection|iterable
     */
    public function getRecommendationId()
    {
        return $this->recommendationId;
    }

    /**
     * @param ArrayCollection|iterable $recommendationId
     */
    public function setRecommendationId($recommendationId): void
    {
        $this->recommendationId = $recommendationId;
    }
    /**
     *
     * @ORM\ManyToOne(targetEntity="Recommendation", inversedBy="types")
    */
    private ?Recommendation $recommendation = null;

    /**
     * @return Recommendation|null
     */
    public function getRecommendation(): ?Recommendation
    {
        return $this->recommendation;
    }

    /**
     * @param Recommendation|null $recommendation
     */
    public function setRecommendation(?Recommendation $recommendation): void
    {
        $this->recommendation = $recommendation;
    }

}