<?php

namespace App\Controller;

use App\Mappers\ArtistMappers;
use App\Repository\ArtistRepository;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistController extends AbstractController
{
    #[Get('/api/artists')]
    #[View]
    public function getAllArtists(ArtistRepository $repo) {
        $artists = $repo->findAll();
        return array_map(function ($item){
            return ArtistMappers::toArtistDTO($item);
        }, $artists);
    }
}
