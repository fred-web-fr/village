<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleEvent;

    /**
     * @ORM\Column(type="text")
     */
    private $descEvent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageEvent;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAtEvent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleEvent(): ?string
    {
        return $this->titleEvent;
    }

    public function setTitleEvent(string $titleEvent): self
    {
        $this->titleEvent = $titleEvent;

        return $this;
    }

    public function getDescEvent(): ?string
    {
        return $this->descEvent;
    }

    public function setDescEvent(string $descEvent): self
    {
        $this->descEvent = $descEvent;

        return $this;
    }

    public function getImageEvent(): ?string
    {
        return $this->imageEvent;
    }

    public function setImageEvent(string $imageEvent): self
    {
        $this->imageEvent = $imageEvent;

        return $this;
    }

    public function getCreatedAtEvent(): ?\DateTimeInterface
    {
        return $this->createdAtEvent;
    }

    public function setCreatedAtEvent(\DateTimeInterface $createdAtEvent): self
    {
        $this->createdAtEvent = $createdAtEvent;

        return $this;
    }
}
