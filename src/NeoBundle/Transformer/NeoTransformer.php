<?php
/**
 * User: Sawant
 * Date: 14/10/2017
 */

namespace NeoBundle\Transformer;

use NeoBundle\Entity\Neo;

/**
 * Class NeoTransformer
 */
class NeoTransformer
{
    /**
     * @param array $data
     *
     * @return Neo
     */
    public function transform(array $data)
    {
        /** @var Neo $neo */
        $neo = new Neo();

        $neo->setName($data['name']);
        $neo->setReferenceId($data['neo_reference_id']);
        $neo->setDate($data['date']);
        $neo->setSpeed($data['speed']);
        $neo->setIsHazardous($data['is_potentially_hazardous_asteroid']);

        return $neo;
    }
}