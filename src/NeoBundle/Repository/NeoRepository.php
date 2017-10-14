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
}
