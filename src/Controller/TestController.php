<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test")
 */
class TestController {
    /**
     * @Route(path="/", methods={"GET"})
     */
    public function index(): Response {
        return new Response(
            '<html><body>TEST</body></html>'
        );
    }
}