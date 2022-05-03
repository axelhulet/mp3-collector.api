<?php

namespace App\Mappers;

use App\Dto\AlbumsArtistDTO;
use App\Entity\Artist;

class AlbumsArtistMappers
{
    public static function toArtistAlbumsDTO(Artist $artist) : AlbumsArtistDTO
    {
    $dto = new AlbumsArtistDTO();
    $dto->setId($artist->getId());
    $dto->setName($artist->getName());
//    $dto->setAlbumId($artist->getAlbums()->getId());
//    $dto->setAlbumName($artist->getAlbums()->getName());
    $dto->setAlbums($artist->getAlbums());
    return $dto;
    }
}