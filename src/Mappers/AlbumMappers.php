<?php

namespace App\Mappers;

use App\Dto\AlbumDTO;
use App\Entity\Album;

class AlbumMappers
{
    public static function toAlbumDTO(Album $album) {
        $dto = new AlbumDTO();
        $dto->setId($album->getId());
        $dto->setName($album->getName());
        $dto->setArtist($album->getArtist());
        return $dto;
    }

    public static function DTOToAlbum(AlbumDTO $albumDTO) {
        $album = new Album();
        $album->setName($albumDTO->getName());
        $album->setArtist($albumDTO->getArtist());
        return $album;
    }
}