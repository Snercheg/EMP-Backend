<?php

namespace App\Controller;

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
        $datas = $this->entityManager->getRepository(Data::class)->find($id);

        if (!$datas) {
            throw $this->createNotFoundException('No datas found for id ' . $id);
        }
        $data = [
            'id' => $datas->getId(),
            'humidity' => $datas->getHumidity(),
            'temperature' => $datas->getTemperature(),
            'illumination' => $datas->getIllumination(),
            'measurementsDate' => $datas->getMeasurementsDate(),
        ];
        return $this->json($data);
    }
}
