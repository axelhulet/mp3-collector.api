<?php

namespace App\Controller;

use App\Dto\fileDTO;
use App\Entity\Album;
use App\Entity\Artist;
use App\Entity\FileMp3;
use App\Entity\Genre;
use App\Entity\Song;
use App\Mappers\SongMappers;
use App\Repository\AlbumRepository;
use App\Repository\ArtistRepository;
use App\Repository\GenreRepository;
use App\Repository\SongRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use getID3;

class SongController extends AbstractFOSRestController
{
    #[Post('/api/song')]
    #[View]
    #[ParamConverter('fileDTO', converter: 'fos_rest.request_body')]
    public function addSong(
        fileDTO $fileDTO,
        ParameterBagInterface $parameterBag,
        EntityManagerInterface $em,
        ArtistRepository $repoArtist,
        AlbumRepository $repoAlbum,
        GenreRepository $repoGenre
    )
    {
        $name = uniqid();
        $base64= explode(',',$fileDTO->getFile())[1];
        file_put_contents($parameterBag->get('mp3_directory') . '/' .  $name, base64_decode($base64));

        $getID3 = new getID3();
        $filename = $parameterBag->get('mp3_directory') . '/' .  $name;
        $filemp3 =  new FileMp3();
        $filemp3->setFilename($filename);
        $ThisFileInfo = $getID3->analyze($filename);
        $getID3->CopyTagsToComments($ThisFileInfo);
        $artist = $repoArtist->findOneBy(array('name' => $ThisFileInfo['comments_html']['artist'][0]));
        if (!$artist) {
            $artist = new Artist();
            $artist->setName($ThisFileInfo['comments_html']['artist'][0]);
            $em->persist($artist);
            $em->flush();
        }
        $album = $repoAlbum->findOneBy(array('name' => $ThisFileInfo['comments_html']['album'][0]));
        if (!$album) {
            $album = new Album();
            $album->setName($ThisFileInfo['comments_html']['album'][0]);
            $album->setArtist($artist);
            $em->persist($album);
            $em->flush();
        }
        $genre = $repoGenre->findOneBy(array('label' => $ThisFileInfo['comments_html']['genre'][0]));
        if (!$genre) {
            $genre = new Genre();
            $genre->setLabel($ThisFileInfo['comments_html']['genre'][0]);
            $em->persist($genre);
            $em->flush();
        }
        /** @var User $user */
        $user= $this->getUser();

        $song = new Song();
        $song->setArtist($artist);
        $song->setAlbum($album);
        $song->setGenre($genre);
        $song->setTitle($ThisFileInfo['comments_html']['title'][0]);
        $song->setTrackNumber($ThisFileInfo['comments_html']['track_number'][0]);
        $song->setLength(50);
        $song->setFileLink($name);
        $song->setUser($user);
        $em->persist($song);
        $em->flush();


        return SongMappers::toSongDTO($song);
    }

    #[Get('/api/songs')]
    #[View]
    public function getAllSongs(SongRepository $repo) {
        $songs = $repo->findAll();
        return array_map(function ($item){
            return SongMappers::toSongDTO($item);
        }, $songs);
    }
}
