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

    /**
     * @param $hazardous
     *
     * @return object
     */
    public function getBestYear($hazardous)
    {
        $queryBuilder = $this->createQueryBuilder('neo');

        $queryBuilder->select('YEAR(neo.date) as neo_year, COUNT(neo.id) as total')
                     ->where('neo.date IS NOT NULL')
                     ->andWhere('neo.isHazardous = :hazardous')
                     ->addOrderBy('total', 'DESC')
                     ->addGroupBy('neo_year');

        $queryBuilder->setParameter('hazardous', $hazardous);

        $query = $queryBuilder->getQuery();

        return $query->execute();
    }

    /**
     * @param $hazardous
     *
     * @return object
     */
    public function getBestMonth($hazardous)
    {
        $queryBuilder = $this->createQueryBuilder('neo');

        $queryBuilder->select('MONTH(neo.date) as neo_month, COUNT(neo.id) as total')
                     ->where('neo.date IS NOT NULL')
                     ->andWhere('neo.isHazardous = :hazardous')
                     ->addOrderBy('total', 'DESC')
                     ->addGroupBy('neo_month');

        $queryBuilder->setParameter('hazardous', $hazardous);

        $query = $queryBuilder->getQuery();

        return $query->execute();
    }
}
