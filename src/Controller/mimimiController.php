<?php

namespace Mimimi\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * Controller used to manage blog contents in the public part of the site.
     *
     * @Route("/foo")
     *
     */
class mimimiController extends AbstractController
{
    /**
     * @Route("/")
     * @Method("GET")
     *
     * NOTE: For standard formats, Symfony will also automatically choose the best
     * Content-Type header for the response.
     * See https://symfony.com/doc/current/quick_tour/the_controller.html#using-formats
     */
    public function index(): Response
    {
        echo "mimimi";
        die;
    }
}
