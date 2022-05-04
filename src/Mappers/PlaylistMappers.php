<?php

namespace App\Mappers;

use App\Dto\PlaylistDTO;
use App\Entity\Playlist;

class PlaylistMappers
{
    public static function toPlaylistDTO(Playlist $playlist) : PlaylistDTO
    {
        $dto = new PlaylistDTO();
        $dto->setId($playlist->getId());
        $dto->setName($playlist->getName());
        $dto->setDescription($playlist->getDescription());
        $dto->setUserId($playlist->getUser()->getId());
        $dto->setUsername($playlist->getUser()->getUsername());
        return $dto;
    }

    public static function DTOToPlaylist(PlaylistDTO $playlistDTO) : Playlist
    {
        $playlist = new Playlist();
        $playlist->setName($playlistDTO->getName());
        $playlist->setDescription($playlistDTO->getDescription());
        return $playlist;
    }
}