<?php

namespace App\Entity;

use App\Repository\TrackRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TrackRepository::class)
 */
class Track
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $durationInMinutes;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPrivate;

    /**
     * @ORM\Column(type="integer")
     */
    private $lenghtInMeters;

    /**
     * @ORM\Column(type="integer")
     */
    private $seats;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modality;

    /**
     * @ORM\ManyToMany(targetEntity=Trail::class)
     */
    private $trails;

    public function __construct()
    {
        $this->trails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDurationInMinutes(): ?int
    {
        return $this->durationInMinutes;
    }

    public function setDurationInMinutes(int $durationInMinutes): self
    {
        $this->durationInMinutes = $durationInMinutes;

        return $this;
    }

    public function getStartAt(): ?\DateTimeInterface
    {
        return $this->startAt;
    }

    public function setStartAt(\DateTimeInterface $startAt): self
    {
        $this->startAt = $startAt;

        return $this;
    }

    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    public function getLenghtInMeters(): ?int
    {
        return $this->lenghtInMeters;
    }

    public function setLenghtInMeters(int $lenghtInMeters): self
    {
        $this->lenghtInMeters = $lenghtInMeters;

        return $this;
    }

    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;

        return $this;
    }

    public function getModality(): ?string
    {
        return $this->modality;
    }

    public function setModality(string $modality): self
    {
        $this->modality = $modality;

        return $this;
    }

    /**
     * @return Collection|Trail[]
     */
    public function getTrails(): Collection
    {
        return $this->trails;
    }

    public function addTrail(Trail $trail): self
    {
        if (!$this->trails->contains($trail)) {
            $this->trails[] = $trail;
        }

        return $this;
    }

    public function removeTrail(Trail $trail): self
    {
        $this->trails->removeElement($trail);

        return $this;
    }
}
