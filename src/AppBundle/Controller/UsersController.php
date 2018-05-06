<?php
// src/AppBundle/Controller/UsersController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\User;
use GuzzleHttp\Client;

class UsersController extends Controller
{
    /**
     * @Route("/users", name="users_list")
     */
    public function listUsersAction()
    {
        /* /usr/local/php5/bin/php */
        $client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com']);

        $response = $client->request('GET', 'users');
        $users = json_decode($response->getBody());

        return $this->render('users/list.html.twig', array(
          "users" => $users
        ));
    }

    /**
     * @Route("/users-delete/{userId}", name="users_delete")
     */
    public function deleteUsersAction(Request $request, $userId)
    {
        $client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com']);
        $response = $client->delete('users/' . $userId);

        return new JsonResponse(array('data' => $userId));
    }
}
