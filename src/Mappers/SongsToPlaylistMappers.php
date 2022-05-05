<?php

namespace App\Mappers;

use App\Dto\PlaylistDTO;
use App\Entity\Playlist;

class SongsToPlaylistMappers
{
    public static function DTOToPlaylist(PlaylistDTO $playlistDTO) : Playlist
    {
        $playlist = new Playlist();
        $playlist->setName($playlistDTO->getName());
        $playlist->setDescription($playlistDTO->getDescription());
        return $playlist;
    }
}