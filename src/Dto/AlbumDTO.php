<?php

namespace App\Dto;

use App\Entity\Artist;

class AlbumDTO
{
    private int $id;

    private Artist $artist;

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
     * @return AlbumDTO
     */
    public function setId(int $id): AlbumDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Artist
     */
    public function getArtist(): Artist
    {
        return $this->artist;
    }

    /**
     * @param Artist $artist
     * @return AlbumDTO
     */
    public function setArtist(Artist $artist): AlbumDTO
    {
        $this->artist = $artist;
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
     * @return AlbumDTO
     */
    public function setName(string $name): AlbumDTO
    {
        $this->name = $name;
        return $this;
    }
}