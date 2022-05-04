<?php

namespace App\Dto;
use App\Entity\Album;
use Doctrine\ORM\PersistentCollection;
use Symfony\Component\Validator\Constraints\Collection;

class AlbumsArtistDTO
{
    private int $id;

    private string $name;

    private PersistentCollection $albums;

//    private int $albumId;
//
//    private string $albumName;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AlbumsArtistDTO
     */
    public function setId(int $id): AlbumsArtistDTO
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
     * @return AlbumsArtistDTO
     */
    public function setName(string $name): AlbumsArtistDTO
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return PersistentCollection
     */
    public function getAlbums(): PersistentCollection
    {
        return $this->albums;
    }

    /**
     * @param PersistentCollection $albums
     * @return AlbumsArtistDTO
     */
    public function setAlbums(PersistentCollection $albums): AlbumsArtistDTO
    {
        $this->albums = $albums;

        return $this;
    }

//    /**
//     * @return int
//     */
//    public function getAlbumId(): int
//    {
//        return $this->albumId;
//    }
//
//    /**
//     * @param int $albumId
//     * @return AlbumsArtistDTO
//     */
//    public function setAlbumId(int $albumId): AlbumsArtistDTO
//    {
//        $this->albumId = $albumId;
//
//        return $this;
//    }
//
//    /**
//     * @return string
//     */
//    public function getAlbumName(): string
//    {
//        return $this->albumName;
//    }
//
//    /**
//     * @param string $albumName
//     * @return AlbumsArtistDTO
//     */
//    public function setAlbumName(string $albumName): AlbumsArtistDTO
//    {
//        $this->albumName = $albumName;
//
//        return $this;
//    }

}