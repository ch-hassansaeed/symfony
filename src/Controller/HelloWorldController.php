<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController
{
    /**
     * @Route("/")
     */
    public function sayHello()
    {
        return new Response(
            'Hello, World!'
        );
    }

    /**
     * @Route("/show/abc")
     */
    public function show()
    {
        return new Response(
            'Hello, World123!'
        );
    }

}