<?php

namespace App\Dto;

use App\Entity\Artist;

class AlbumDTO
{
    private int $id;

    private int $artistId;

    private string $artistName;

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
     * @return int
     */
    public function getArtistId(): int
    {
        return $this->artistId;
    }

    /**
     * @param int $artistId
     */
    public function setArtistId(int $artistId): void
    {
        $this->artistId = $artistId;
    }

    /**
     * @return string
     */
    public function getArtistName(): string
    {
        return $this->artistName;
    }

    /**
     * @param string $artistName
     */
    public function setArtistName(string $artistName): void
    {
        $this->artistName = $artistName;
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