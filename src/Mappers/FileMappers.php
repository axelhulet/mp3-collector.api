<?php

namespace App\Mappers;

use App\Dto\fileDTO;
use App\Entity\FileMp3;

class FileMappers
{
    public static  function  DTOToFile(FileDTO $fileDTO) : FileMp3 {
        $file = new FileMp3();
        $file->setFilename($fileDTO->getFilename());
        return $file;
    }
}