<?php

namespace App\Dto;

class UserDTO
{
    private int $id;

    private string $username;

    private string $password;

    private bool $active;

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     * @return UserDTO
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return UserDTO
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return UserDTO
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return UserDTO
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

}