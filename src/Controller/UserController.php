<?php

namespace App\Controller;

use App\Dto\UserDTO;
use App\Mappers\UserMappers;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Validator\ConstraintViolationList;

class UserController extends AbstractFOSRestController
{
    #[POST('/api/user')]
    #[View]
    #[ParamConverter('userDTO', converter: 'fos_rest.request_body')]
    public function addUser(
        UserDTO $userDTO,
        UserPasswordHasherInterface $hasher,
        EntityManagerInterface $em
    ) {
//        if (count($errors)) {
//            throw new BadRequestHttpException();
//        }
        var_dump($userDTO);
        $user = UserMappers::DTOToUser($userDTO, $hasher);
        $em->persist($user);
        $em->flush();
        return $user->getId();
    }
    #[Get('/api/users')]
    #[View]
    public function getAllUsers(UserRepository $repo): array
    {
        $users = $repo->findAll();
        return array_map(function ($item){
            return UserMappers::toUserDTO($item);
        }, $users);
    }
}
