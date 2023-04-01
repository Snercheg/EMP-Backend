<?php

namespace App\Controller;

use App\Entity\Module;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Data;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataGet extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/getData/{id}", methods={"GET"})
     */

    public function getItem(int $id): Response
    {
        $datas = $this->entityManager->getRepository(Module::class)->find($id);
        $data = $datas->getDatas();
        return $this->json($data);
    }
}
