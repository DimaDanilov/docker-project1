<?php


namespace App\Api\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test")
 */
class TestController
{
    /**
     * @Route(path="/", methods={"GET"})
     */
    public function index()
    {
        return new Response(
            "<h1>Вы зашли в систему!</h1>
                    <a href='/'><-Перейти на главную</a>",
            Response::HTTP_OK,
            [
                'Content-type' => 'text/html'
            ]
        );
    }

    /**
     * @Route(path="/users", methods={"GET"})
     */
    public function users()
    {
        return new Response(
            json_encode([
                "test" => "user",
                "test2" => "user2",
            ]),
            Response::HTTP_OK,
            [
                'Content-type' => 'application/json'
            ]
        );
    }
}