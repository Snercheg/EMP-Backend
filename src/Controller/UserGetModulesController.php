<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\UserModule;
use App\Entity\User;
use App\Entity\Module;

class UserGetModulesController extends AbstractController
{

    // Объявляем приватное свойство для хранения экземпляра менеджера сущностей
    private EntityManagerInterface $entityManager;

    // Определяем конструктор для инициализации свойства менеджера сущностей
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/usermodules/{user_id_id}", name="get_user_modules", methods={"GET"})
     */
    public function getCollection(Request $request, $user_id_id): Response
    {
        $um_ids = $this->entityManager->getRepository(UserModule::class)->findAll();

        $data = [];
        foreach ($um_ids as $um_id) {
            if ($um_id->getUserId()->getId() === intval($user_id_id)) {
                $data[] = [
                   // 'id' => $um_id->getId(),
                   // 'user_id' => [
                   //     'id' => $um_id->getUserId()->getId(),
                   //     'username' => $um_id->getUserId()->getUserName()
                   // ],
                    'module_id' => [
                        'id' => $um_id->getModuleId()->getId(),
                        'status' => $um_id->getModuleId()->getStatus()
                    ],
                    'name' => $um_id->getName(),
                ];
            }
        }

        // Возвращаем данные о книге в формате JSON
        return $this->json($data);
    }

}