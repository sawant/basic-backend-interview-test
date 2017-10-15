<?php

namespace Tests\NeoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class AsteroidControllerTest
 *
 * @package Tests\NeoBundle\Controller
 */
class AsteroidControllerTest extends WebTestCase
{
    /**
     * @var Client
     */
    protected $client;

    protected function setUp()
    {
        parent::setUp();

        $this->client = static::createClient();
    }

    /**
     * @test
     */
    public function testHazardous()
    {
        $this->client->request('GET', '/neo/hazardous');

        $response = $this->client->getResponse();
        $data     = json_decode($response->getContent(), true);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $response->headers->get('Content-Type'));

        // Verify that result data has the correct keys
        $this->assertArrayHasKey('id', $data[0]);
        $this->assertArrayHasKey('name', $data[0]);
        $this->assertArrayHasKey('date', $data[0]);
        $this->assertArrayHasKey('reference_id', $data[0]);
        $this->assertArrayHasKey('speed', $data[0]);
        $this->assertArrayHasKey('is_hazardous', $data[0]);
    }

    /**
     * @test
     *
     * @param $hazardous
     *
     * @dataProvider getHazardous
     */
    public function testFastest($hazardous)
    {
        $this->client->request('GET', '/neo/fastest?hazardous=' . $hazardous);

        $response = $this->client->getResponse();
        $data     = json_decode($response->getContent(), true);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $response->headers->get('Content-Type'));

        // Verify that result data has the correct keys
        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('name', $data);
        $this->assertArrayHasKey('date', $data);
        $this->assertArrayHasKey('reference_id', $data);
        $this->assertArrayHasKey('speed', $data);
        $this->assertArrayHasKey('is_hazardous', $data);

        // Verify that 'is_hazardous' is correct based on the 'boolean hazardous' filter applied
        $this->assertEquals($hazardous, $data['is_hazardous']);
    }

    /**
     * @test
     *
     * @param $hazardous
     *
     * @dataProvider getHazardous
     */
    public function testBestYear($hazardous)
    {
        $this->client->request('GET', '/neo/best-year?hazardous=' . $hazardous);

        $response = $this->client->getResponse();
        $data     = json_decode($response->getContent(), true);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', $response->headers->get('Content-Type'));

        // Verify that result data has the correct keys
        $this->assertArrayHasKey('neo_year', $data[0]);
        $this->assertArrayHasKey('total', $data[0]);
    }

    /**
     * @return array
     */
    public function getHazardous()
    {
        return [
            [true],
            [false]
        ];
    }
}
