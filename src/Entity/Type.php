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
     * @ORM\Column(type="text")
     */
    private string $description;
    /**
     * @ORM\Column(type="integer")
     */
    private int $createdBy;
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    protected $modifiedAt;
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
     * @return \DateTime
     */
    public function __construct()
    {
        $this->modifiedAt = new \DateTime();
        $this->types = new ArrayCollection();
    }
    public function getModifiedAt()
    {
        return $this->modifiedAt;
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
     * @ORM\ManyToOne(targetEntity="Recommendation", inversedBy="types")
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
     * @var Module[] Available types from this typeId
     * @ORM\OneToMany(targetEntity="Module", mappedBy="typeId")
     */
    private iterable $modules;
    /**
     * @return Module[]
     */
    public function getModules(): iterable|ArrayCollection
    {
        return $this->modules;
    }
}