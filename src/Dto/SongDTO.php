<?php

namespace App\Dto;

use App\Entity\Album;
use App\Entity\Artist;
use App\Entity\Genre;
use App\Entity\User;

class SongDTO
{
    private int $id;

    private int $artistId;

    private string $artistName;

    private int $albumId;

    private string $albumName;

    private int $genreId;

    private string $genreLabel;

    private int $userId;

    private string $username;

    private string $title;

    private int $trackNumber;

    private int $length;

    private string $fileLink;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return SongDTO
     */
    public function setId(int $id): SongDTO
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
     * @return SongDTO
     */
    public function setArtistId(int $artistId): SongDTO
    {
        $this->artistId = $artistId;
        return $this;
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
     * @return SongDTO
     */
    public function setArtistName(string $artistName): SongDTO
    {
        $this->artistName = $artistName;
        return $this;
    }

    /**
     * @return int
     */
    public function getAlbumId(): int
    {
        return $this->albumId;
    }

    /**
     * @param int $albumId
     * @return SongDTO
     */
    public function setAlbumId(int $albumId): SongDTO
    {
        $this->albumId = $albumId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlbumName(): string
    {
        return $this->albumName;
    }

    /**
     * @param string $albumName
     * @return SongDTO
     */
    public function setAlbumName(string $albumName): SongDTO
    {
        $this->albumName = $albumName;
        return $this;
    }

    /**
     * @return int
     */
    public function getGenreId(): int
    {
        return $this->genreId;
    }

    /**
     * @param int $genreId
     * @return SongDTO
     */
    public function setGenreId(int $genreId): SongDTO
    {
        $this->genreId = $genreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenreLabel(): string
    {
        return $this->genreLabel;
    }

    /**
     * @param string $genreLabel
     * @return SongDTO
     */
    public function setGenreLabel(string $genreLabel): SongDTO
    {
        $this->genreLabel = $genreLabel;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return SongDTO
     */
    public function setUserId(int $userId): SongDTO
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return SongDTO
     */
    public function setUsername(string $username): SongDTO
    {
        $this->username = $username;
        return $this;
    }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return SongDTO
     */
    public function setTitle(string $title): SongDTO
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrackNumber(): int
    {
        return $this->trackNumber;
    }

    /**
     * @param int $trackNumber
     * @return SongDTO
     */
    public function setTrackNumber(int $trackNumber): SongDTO
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return SongDTO
     */
    public function setLength(int $length): SongDTO
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileLink(): string
    {
        return $this->fileLink;
    }

    /**
     * @param string $fileLink
     * @return SongDTO
     */
    public function setFileLink(string $fileLink): SongDTO
    {
        $this->fileLink = $fileLink;
        return $this;
    }
}