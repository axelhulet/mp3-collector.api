<?php

namespace App\Controller;

use App\Dto\PlaylistDTO;
use App\Entity\User;
use App\Mappers\PlaylistMappers;
use App\Repository\PlaylistRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlaylistController extends AbstractFOSRestController
{
    #[Post('/api/playlist')]
    #[View]
    #[ParamConverter('playlistDTO', converter: 'fos_rest.request_body')]
    public function addPlaylist(
        playlistDTO $playlistDTO,
        EntityManagerInterface $em,
        PlaylistRepository $repo
    ){
        $playlist = PlaylistMappers::DTOToPlaylist($playlistDTO);
        /** @var User $user */
        $user = $this->getUser();
        $playlist->setUser($user);
        $em->persist($playlist);
        $em->flush();
        return $playlist->getId();
    }
    #[Get('/api/playlists')]
    #[View]
    public function getAllPlaylists(PlaylistRepository $repo): array
    {
        $playlists = $repo->findAll();
        return array_map(function ($item){
            return PlaylistMappers::toPlaylistDTO($item);
        }, $playlists);
    }
}
