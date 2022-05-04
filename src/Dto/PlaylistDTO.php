<?php

namespace App\Dto;

class PlaylistDTO
{
    private int $id;

    private string $name;

    private string $description;

    private int $userId;

    private string $username;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return PlaylistDTO
     */
    public function setId(int $id): PlaylistDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PlaylistDTO
     */
    public function setName(string $name): PlaylistDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return PlaylistDTO
     */
    public function setDescription(string $description): PlaylistDTO
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return PlaylistDTO
     */
    public function setUserId(int $userId): PlaylistDTO
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return PlaylistDTO
     */
    public function setUsername(string $username): PlaylistDTO
    {
        $this->username = $username;

        return $this;
    }
}