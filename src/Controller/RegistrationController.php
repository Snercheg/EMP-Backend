<?php
//
//namespace App\Controller;
//use App\Entity\User;
//use App\From\UserType;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
//
//class RegistrationController extends AbstractController
//{
//    private $passwordEncoder;
//
//    public function __construct(UserPasswordEncoderInterface $passwordEncoder){
//        $this->passwordEncoder = $passwordEncoder;
//    }
//    #[Route('/registration', name: 'app_registration')]
//    public function index(Request $request): Response
//    {
//        $user = new User();
//        $from = $this->createForm(UserType::class, $user);
//        $from->handleRequest($request);
//        if($from->isSubmitted()&&$from->isValid()){
//        $user->setPassword($this->passwordEncoder->encodePassword($user, $user->getPassword()));
//        $user->setRoles(['ROLE_USER']);
//
//        $em = $this->getDoctrine()->getManager();
//
//        }
//    }
//}
