<?php

namespace App\Entity;

use App\Repository\FileMp3Repository;
use Doctrine\ORM\Mapping as ORM;

class FileMp3
{


    private $filename;


    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param mixed $filename
     * @return FileMp3
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }
}
