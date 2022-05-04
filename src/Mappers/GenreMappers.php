<?php

namespace App\Mappers;

use App\Dto\GenreDTO;
use App\Entity\Genre;

class GenreMappers
{
    public static function toGenreDTO(Genre $genre) : GenreDTO
    {
        $dto = new GenreDTO();
        $dto->setId($genre->getId());
        $dto->setLabel($genre->getLabel());
        return $dto;
    }

    public static function DTOToGenre(GenreDTO $genreDTO) : Genre
    {
        $genre = new Genre();
        $genre->setLabel($genreDTO->getLabel());
        return $genre;
    }
}