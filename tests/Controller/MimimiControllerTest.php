<?php

namespace Mimimi\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MimimiControllerTest extends WebTestCase
{
    public function testFoo()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
