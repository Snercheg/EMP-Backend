<?php

// namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Doctrine\ORM\EntityManagerInterface;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;

// use App\Entity\Setting;
// use App\Entity\Recommendation;

// class SettingGetRecommendationController extends AbstractController
// {

//     // Объявляем приватное свойство для хранения экземпляра менеджера сущностей
//     private EntityManagerInterface $entityManager;

//     // Определяем конструктор для инициализации свойства менеджера сущностей
//     public function __construct(EntityManagerInterface $entityManager)
//     {
//         $this->entityManager = $entityManager;
//     }

//     /**
//      * @Route("/settingmodule/{id}", name="get_user_modules", methods={"GET"})
//      */
//     public function getCollection(Request $request, $id): Response
//     {
//         $settings = $this->entityManager->getRepository(Setting::class)->findAll();
//         $modules = $this->entityManager->getRepository(Module::class)->findAll();
//         $data = [];
//         $setting_id = '';
//         foreach ($modules as $mod_id) {
//             if ($mod_id->getId() === intval($id)) {

//                 $setting_id = $mod_id->getSettingId();
//             }
//         }
//         foreach ($settings as $setting) {
//             if ($setting->getId() === intval($setting_id)) {
//                 $data[] = [
//                     'id' => $setting->getId(),
//                     'name' => $setting->getName(),
//                     'temperature_setting' => $setting->getTemperatureSetting(),
//                     'humidity_setting' => $setting->getHumiditySetting(),
//                     'illumination_setting' => $setting->getIlluminationSetting(),
//                     'recommendation' => $setting->getRecommendationId(),
//                 ];
//             }
//         }

//         return $this->json($data);
//     }
// }
