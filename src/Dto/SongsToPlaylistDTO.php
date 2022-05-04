<?php

namespace App\Dto;

use Doctrine\Common\Collections\ArrayCollection;

class SongsToPlaylistDTO
{
    private int $id;

    private string $name;

    private ArrayCollection $songs;

//    public function _construct() {
//        $this->songs = array();
//    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return SongsToPlaylistDTO
     */
    public function setId(int $id): SongsToPlaylistDTO
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
     * @return SongsToPlaylistDTO
     */
    public function setName(string $name): SongsToPlaylistDTO
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getSongs(): array
    {
        return $this->songs;
    }

    /**
     * @param array $songs
     * @return SongsToPlaylistDTO
     */
    public function setSongs(array $songs): SongsToPlaylistDTO
    {
        $this->songs = $songs;
        return $this;
    }
}