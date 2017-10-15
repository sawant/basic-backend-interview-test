<?php
/**
 * User: Sawant
 * Date: 14/10/2017
 */

namespace NeoBundle\Service;

use Buzz\Browser;
use Buzz\Client\Curl;

/**
 * Class NeoAPIService
 *
 * @package NeoBundle\Service
 */
class NeoAPIService
{
    /**
     * @var integer
     */
    protected $count;

    /**
     * Provide config here to override the values from parameters.yml
     *
     * @var array
     */
    protected static $config = [];

    /**
     * NeoAPIService constructor.
     *
     * @param $apiKey
     * @param $apiUrl
     */
    public function __construct($apiKey, $apiUrl)
    {
        if (sizeof(self::$config) === 0) {
            self::$config = [
                'nasa_api_key' => $apiKey,
                'nasa_api_url' => $apiUrl,
            ];
        }
    }

    /**
     * @param $startDate
     * @param $endDate
     *
     * @return mixed
     */
    public function fetchData($startDate, $endDate)
    {
        $data = $this->getData(
            'feed',
            [
                'start_date' => $startDate,
                'end_date'   => $endDate,
                'detailed'   => true,
            ]
        );

        $data = json_decode($data, true);

        $this->count = $data['element_count'];

        return $data['near_earth_objects'];
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param       $method
     * @param array $params
     *
     * @return string
     */
    protected function getData($method, array $params = [])
    {
        $curl    = new Curl();
        $browser = new Browser();

        $requestUrl    = self::$config['nasa_api_url'] . '/' . $method;
        $requestParams = $this->prepareParameters($params);

        $browser->setClient($curl);
        $response = $browser->get($requestUrl . '?' . $requestParams);

        return $response->getContent() ?: '';
    }

    /**
     * @param array $params
     *
     * @return string
     */
    protected function prepareParameters(array $params)
    {
        $params['api_key'] = self::$config['nasa_api_key'];

        $newParams = [];

        foreach ($params as $name => $value) {
            if ($value) {
                $newParams[] = sprintf('%s=%s', $name, $value);
            }
        }

        return implode('&', $newParams);
    }
}