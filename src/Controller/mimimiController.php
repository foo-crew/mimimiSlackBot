<?php

namespace Mimimi\Controller;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Slack\SlackDriver;
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
    public function index()
    {
<<<<<<< HEAD
        echo "mimimi";
        die;
=======
        $config = [
            'slack' => [
                'token' => 'YOUR-SLACK-BOT-TOKEN'
            ]
        ];
        
        DriverManager::loadDriver(SlackDriver::class);

        $botman = BotManFactory::create($config);

        $botman->hears('mimimi', function (Botman $bot) {
            $bot->reply('mimimi');
        });

        $botman->listen();
>>>>>>> 7d46f1c0a26d3bb75c9134483558ba11aa883ee8
    }
}
