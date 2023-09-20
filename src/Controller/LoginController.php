<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
  // #[Route('/login', name: 'app_login')]
  // public function index(): Response
  // {
  //     return $this->render('login/index.html.twig', [
  //         'controller_name' => 'LoginController',
  //     ]);
  // }


  /**
   * @Route("",name="movies")
   */
  public function abc(): Response
  {
 
    return $this->render('login/simple_form.html.twig', [
      "first_name" => '',
      "last_name" => ''
    ]);
  }
   /**
   * @Route("/show",name="validate")
   */
  public function abcd ():Response 
  {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    return $this->render('login/simple_form.html.twig', [
      "first_name" => $fname,
      "last_name" => $lname
    ]);
  }




}
