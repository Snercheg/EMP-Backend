<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Setting;
use App\Entity\Module;

class ModuleGetSettingController extends AbstractController
{

    private EntityManagerInterface $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/settingmodule/{id}", methods={"GET"})
     */
    public function getCollection(Request $request, $id): Response
    {
        $modules = $this->entityManager->getRepository(Module::class)->find($id);
        $data = $modules->getSettingId();
        return $this->json($data);
    }
}