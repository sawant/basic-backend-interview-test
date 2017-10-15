<?php

namespace NeoBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\OptimisticLockException;
use NeoBundle\Entity\Neo;

/**
 * NeoRepository
 */
class NeoRepository extends EntityRepository
{
    /**
     * @param Neo $neo
     *
     * @throws OptimisticLockException
     */
    public function save(Neo $neo)
    {
        $this->_em->persist($neo);

        $this->_em->flush();
    }

    /**
     * @return array
     */
    public function getHazardousNeos()
    {
        return $this->findBy(['isHazardous' => true]);
    }

    /**
     * @param $hazardous
     *
     * @return object
     */
    public function getFastestNeos($hazardous)
    {
        return $this->findOneBy(
            ['isHazardous' => $hazardous],
            ['speed' => 'DESC']
        );
    }
}
