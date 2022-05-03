<?php

namespace App\Dto;

use App\Entity\Album;

class ArtistDTO
{
    private int $id;

    private string $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ArtistDTO
     */
    public function setId(int $id): ArtistDTO
    {
        $this->id = $id;
        return $this;
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
     * @return ArtistDTO
     */
    public function setName(string $name): ArtistDTO
    {
        $this->name = $name;
        return $this;
    }

}