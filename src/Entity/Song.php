<?php

namespace App\Entity;

use App\Repository\SongRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SongRepository::class)]
class Song
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', nullable: false)]
    private $title;

    #[ORM\ManyToOne(targetEntity: Artist::class, inversedBy: 'songs')]
    private $artist;

    #[ORM\ManyToOne(targetEntity: Album::class,inversedBy: 'songs')]
    private $album;

    #[ORM\ManyToOne(targetEntity: Genre::class,inversedBy: 'songs')]
    private $genre;

    #[ORM\Column(type: 'integer')]
    private $trackNumber;

    #[ORM\Column(type: 'integer')]
    private $length;

    #[ORM\ManyToOne(targetEntity: User::class,inversedBy: 'songs')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[ORM\Column(type: 'string',unique: true,nullable: false)]
    private $fileLink;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Song
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param mixed $artist
     * @return Song
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param mixed $album
     * @return Song
     */
    public function setAlbum($album)
    {
        $this->album = $album;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     * @return Song
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackNumber()
    {
        return $this->trackNumber;
    }

    /**
     * @param mixed $trackNumber
     * @return Song
     */
    public function setTrackNumber($trackNumber)
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     * @return Song
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return Song
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileLink()
    {
        return $this->fileLink;
    }

    /**
     * @param mixed $fileLink
     * @return Song
     */
    public function setFileLink($fileLink)
    {
        $this->fileLink = $fileLink;
        return $this;
    }
}
