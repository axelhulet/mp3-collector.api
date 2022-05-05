<?php

namespace App\Mappers;

use App\Dto\SongDTO;
use App\Entity\Song;

class SongMappers
{
    public static function toSongDTO(Song $song) : SongDTO
    {
        $dto = new SongDTO();
        $dto->setId($song->getId());
        $dto->setArtistId($song->getArtist()->getID());
        $dto->setArtistName($song->getArtist()->getName());
        $dto->setAlbumId($song->getAlbum()->getId());
        $dto->setAlbumName($song->getAlbum()->getName());
        $dto->setGenreId($song->getGenre()->getId());
        $dto->setGenreLabel($song->getGenre()->getLabel());
        $dto->setUserId($song->getUser()->getId());
        $dto->setUsername($song->getUser()->getUsername());
        $dto->setTitle($song->getTitle());
        $dto->setTrackNumber($song->getTrackNumber());
        $dto->setLength($song->getLength());
        $dto->setFileLink($song->getFileLink());
        return $dto;
    }

    public static function DTOToSong(SongDTO $songDTO) : Song
    {
        $song = new Song();
//        $song->setArtist($songDTO->getArtist());
//        $song->setAlbum($songDTO->getAlbum());
        $song->setGenre($songDTO->getGenre());
        //$song->setUser($songDTO->getUser());
        $song->setTitle($songDTO->getTitle());
        $song->setTrackNumber($songDTO->getTrackNumber());
        $song->setLength($songDTO->getLength());
        $song->setFileLink($songDTO->getFileLink());
        return $song;
    }


}