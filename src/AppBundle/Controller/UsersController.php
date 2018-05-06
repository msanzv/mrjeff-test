<?php
// src/AppBundle/Controller/UsersController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends Controller
{
    /**
     * @Route("/users/list", name="users_list")
     */
    public function listUsersAction()
    {
        /* /usr/local/php5/bin/php */
        $number = mt_rand(0, 100);

        // $users = new Request('https://jsonplaceholder.typicode.com/users', 'GET'); 
        $user = new User(1, 'Paco');

        return $this->render('users/list.html.twig', array(
          "user" => $user
        ));
    }
}