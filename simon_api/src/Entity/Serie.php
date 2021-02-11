<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SerieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=SerieRepository::class)
 */
class Serie
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
    private $season;

    /**
     * @ORM\Column(type="integer")
     */
    private $first_number;

    /**
     * @ORM\Column(type="integer")
     */
    private $second_number;

    /**
     * @ORM\Column(type="integer")
     */
    private $third_number;

    /**
     * @ORM\Column(type="integer")
     */
    private $fourth_number;

    /**
     * @ORM\Column(type="integer")
     */
    private $fifth_number;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSeason(): ?int
    {
        return $this->season;
    }

    public function setSeason(int $season): self
    {
        $this->season = $season;

        return $this;
    }

    public function getFirstNumber(): ?int
    {
        return $this->first_number;
    }

    public function setFirstNumber(int $first_number): self
    {
        $this->first_number = $first_number;

        return $this;
    }

    public function getSecondNumber(): ?int
    {
        return $this->second_number;
    }

    public function setSecondNumber(int $second_number): self
    {
        $this->second_number = $second_number;

        return $this;
    }

    public function getThirdNumber(): ?int
    {
        return $this->third_number;
    }

    public function setThirdNumber(int $third_number): self
    {
        $this->third_number = $third_number;

        return $this;
    }

    public function getFourthNumber(): ?int
    {
        return $this->fourth_number;
    }

    public function setFourthNumber(int $fourth_number): self
    {
        $this->fourth_number = $fourth_number;

        return $this;
    }

    public function getFifthNumber(): ?int
    {
        return $this->fifth_number;
    }

    public function setFifthNumber(int $fifth_number): self
    {
        $this->fifth_number = $fifth_number;

        return $this;
    }
}
