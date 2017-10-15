<?php

namespace Tests\NeoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AsteroidControllerTest extends WebTestCase
{
    public function testHazardous()
    {
        $client = static::createClient();

        $client->request('GET', '/neo/hazardous');

        $response = $client->getResponse();
        $data     = json_decode($response->getContent(), true);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $response->headers->get('Content-Type'));

        // Verify that array in the returned has the correct keys
        $this->assertArrayHasKey('id', $data[0]);
        $this->assertArrayHasKey('name', $data[0]);
        $this->assertArrayHasKey('date', $data[0]);
        $this->assertArrayHasKey('reference_id', $data[0]);
        $this->assertArrayHasKey('speed', $data[0]);
        $this->assertArrayHasKey('is_hazardous', $data[0]);
    }
}
