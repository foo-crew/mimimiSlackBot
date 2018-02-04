<?php

namespace Mimimi\Controller;


use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
     * Controller used to manage blog contents in the public part of the site.
     *
     */
class MimimiController extends AbstractController
{
    public function index(Request $request)
    {

        try {


            $data = json_decode($request->getContent(), true);
            //file_put_contents('/tmp/request.txt', $request->getContent());

            if ($data['type'] == "url_verification"){
                return new JsonResponse(['challenge' => $data['challenge']]);
            }

            $client = new Client();

            $payload = [
                'text' => 'Hello Bot',
                'channel'=>$data['event']['channel']
            ];

            $client->post(
                'https://slack.com/api/chat.postMessage',

                ['body' => json_encode($payload, JSON_UNESCAPED_UNICODE),
                    'headers' => [
                        'Authorization' => 'Bearer xoxb-309655152658-sfzIX7Y7f1SytopMKaYz9MhM',
                        'Content-type' => 'application/json'
                    ]
                ]
            );

            return new JsonResponse([],Response::HTTP_OK);


        } catch (\Throwable $e) {
            file_put_contents('/tmp/exception.txt', json_encode($e->getTraceAsString()));
        }
    }
}
