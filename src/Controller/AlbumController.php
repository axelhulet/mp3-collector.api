<?php

namespace App\Controller;

use App\Mappers\AlbumMappers;
use App\Repository\AlbumRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlbumController extends AbstractFOSRestController
{
    #[Get('/api/albums')]
    #[View]
    public function getAllAlbums(AlbumRepository $repo): array
    {
        $albums = $repo->findAll();
        return array_map(function ($item){
            return AlbumMappers::toAlbumDTO($item);
        }, $albums);
    }
    #[Get('/api/albumsByArtist/{id}')]
    #[View]
    public function getAlbumsByArtist($id, AlbumRepository $repo): array
    {
        $albums = $repo->findBy(['artist' => $id]);
        return array_map(function ($item){
            return AlbumMappers::toAlbumDTO($item);
        }, $albums);
    }
}
