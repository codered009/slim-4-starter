<?php

declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

class HomeController extends Controller
{
    public function index(Request $request, Response $response)
    {
        return $this->view->render($response, 'home/index.twig');
    }
}