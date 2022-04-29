<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{


    #[Route('/test', name: 'app_test')]
    public function index(UserPasswordHasherInterface $hasher, EntityManagerInterface $entityManager): Response
    {
//        $user1 = new User();
//        $user1->setUsername('axel');
//        $user1->setRoles(['ROLE_USER']);
//        $user1->setPassword($hasher->hashPassword($user1, '123456'));
//
//        $user2 = new User();
//        $user2->setUsername('jordan');
//        $user2->setRoles(['ROLE_USER']);
//        $user2->setPassword($hasher->hashPassword($user2, '123456'));
//        $entityManager->persist($user1);
//        $entityManager->persist(($user2));
//        $entityManager->flush();
//        return  new JsonResponse(['response'=>'ok']);
    }
}
