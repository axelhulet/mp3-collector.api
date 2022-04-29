<?php

namespace App\Dto;

class fileDTO
{
    private string $file = "";

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return fileDTO
     */
    public function setFile(string $file): fileDTO
    {
        $this->file = $file;
        return $this;
    }


}