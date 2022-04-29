<?php

namespace App\Controller;

use App\Dto\UserDTO;
use App\Mappers\UserMappers;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
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
        $user = UserMappers::DTOToUser($userDTO, $hasher);
        $em->persist($user);
        $em->flush();
        return $user->getId();

    }
}
