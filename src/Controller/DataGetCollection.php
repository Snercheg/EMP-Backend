<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Data;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataGetCollection extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/getdatacollection", methods={"GET"})
     */
    public function getCollection(Request $request): Response
    {
        $datas = $this->entityManager->getRepository(Data::class)->findAll();

        $dataa = [];
        foreach ($datas as $data) {
            $dataa[] = [
                'id' => $data->getId(),
                'humidity' => $data->getHumidity(),
                'temperature' => $data->getTemperature(),
                'illumination' => $data->getIllumination(),
                'measurementsDate' => $data->getMeasurementsDate(),
            ];
        }

        return $this->json($dataa);
    }

}