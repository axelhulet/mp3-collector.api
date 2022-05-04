<?php

namespace App\Mappers;

use App\Dto\AlbumDTO;
use App\Entity\Album;

class AlbumMappers
{
    public static function toAlbumDTO(Album $album) : AlbumDTO
    {
        $dto = new AlbumDTO();
        $dto->setId($album->getId());
        $dto->setName($album->getName());
        $dto->setArtistId($album->getArtist()->getID());
        $dto->setArtistName($album->getArtist()->getName());
        return $dto;
    }

    public static function DTOToAlbum(AlbumDTO $albumDTO) : Album
    {
        $album = new Album();
        $album->setName($albumDTO->getName());
        $album->setArtist($albumDTO->getArtist());
        return $album;
    }
}