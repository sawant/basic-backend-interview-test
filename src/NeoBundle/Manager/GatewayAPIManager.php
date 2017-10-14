<?php
/**
 * User: Sawant
 * Date: 14/10/2017
 */

namespace NeoBundle\Manager;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\OptimisticLockException;
use NeoBundle\Entity\Neo;
use NeoBundle\Repository\NeoRepository;
use NeoBundle\Service\NeoAPIService;
use NeoBundle\Transformer\NeoTransformer;

/**
 * Class GatewayAPIManager
 */
class GatewayAPIManager
{
    /**
     * @var NeoAPIService
     */
    protected $neoApiService;

    /**
     * @var NeoTransformer
     */
    protected $dataTransformer;

    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * GatewayAPIManager constructor.
     *
     * @param NeoAPIService  $neoApiService
     * @param EntityManager  $entityManager
     * @param NeoTransformer $dataTransformer
     */
    public function __construct(
        NeoAPIService $neoApiService,
        EntityManager $entityManager,
        NeoTransformer $dataTransformer
    )
    {
        $this->neoApiService   = $neoApiService;
        $this->entityManager   = $entityManager;
        $this->dataTransformer = $dataTransformer;
    }

    /**
     * @param $startDate
     * @param $endDate
     *
     * @return int
     *
     * @throws OptimisticLockException
     */
    public function fetchAndSaveData($startDate, $endDate)
    {
        $neoData = $this->neoApiService->fetchData($startDate, $endDate);

        /** @var NeoRepository $neoRepository */
        $neoRepository = $this->entityManager->getRepository('NeoBundle:Neo');

        /** @var array $neoData */
        foreach ($neoData as $date => $dateData) {
            foreach ($dateData as $data) {
                /** @var Neo $neoObject */
                $data['date']  = $date;
                $data['speed'] = $data['close_approach_data'][0]['relative_velocity']['kilometers_per_hour'];
                $neoObject     = $this->dataTransformer->transform($data);

                $neoRepository->save($neoObject);
            }
        }

        return $this->neoApiService->getCount();
    }
}