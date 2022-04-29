<?php

namespace App\Mappers;

use App\Dto\UserDTO;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserMappers
{
    public static function toUserDTO(User $user) : UserDTO {
        $dto = new UserDTO();
        $dto->setUsername($user->getUsername());
        $dto->setPassword($user->getPassword());
        $dto->setActive($user->getActive());
        $dto->setId($user->getId());
        return $dto;
    }

    public static  function  DTOToUser(UserDTO $userDTO, UserPasswordHasherInterface $hasher) : User {
        $user = new User();
        $user->setUsername($userDTO->getUsername());
        $user->setPassword($hasher->hashPassword($user, $userDTO->getPassword()));
        $user->setRoles(['ROLE_USER']);
        $user->setActive($userDTO->getActive());
        return $user;
    }
}