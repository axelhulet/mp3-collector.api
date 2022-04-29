<?php

namespace App\Dto;

class GenreDTO
{
    private int $id;

    private string $label;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return GenreDTO
     */
    public function setId(int $id): GenreDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return GenreDTO
     */
    public function setLabel(string $label): GenreDTO
    {
        $this->label = $label;
        return $this;
    }
}