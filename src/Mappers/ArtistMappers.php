<?php

namespace App\Mappers;

use App\Dto\ArtistDTO;
use App\Entity\Artist;

class ArtistMappers
{
    public static function toArtistDTO(Artist $artist) {
        $dto = new ArtistDTO();
        $dto->setId($artist->getId());
        $dto->setName($artist->getName());
        return $dto;
    }

    public static function DTOToArtist(ArtistDTO $artistDTO) {
        $artist = new Artist();
        $artist->setName($artistDTO->getName());

        return $artist;
    }
}