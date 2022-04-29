<?php

namespace App\Entity;

use App\Repository\ArtistRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtistRepository::class)]
class Artist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', unique: true,nullable: false)]
    private $name;

    #[ORM\OneToMany(mappedBy: 'artist',targetEntity: Song::class)]
    private $songs;

    #[ORM\OneToMany(mappedBy: 'artist',targetEntity: Album::class)]
    private $albums;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Artist
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSongs()
    {
        return $this->songs;
    }

    /**
     * @param mixed $songs
     * @return Artist
     */
    public function setSongs($songs)
    {
        $this->songs = $songs;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * @param mixed $albums
     * @return Artist
     */
    public function setAlbums($albums)
    {
        $this->albums = $albums;
        return $this;
    }
}
