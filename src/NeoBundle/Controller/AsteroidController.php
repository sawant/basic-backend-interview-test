<?php
/**
 * User: Sawant
 * Date: 14/10/2017
 */

namespace NeoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use NeoBundle\Entity\Neo;
use NeoBundle\Repository\NeoRepository;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AsteroidController
 *
 * @package NeoBundle\Controller
 */
class AsteroidController extends FOSRestController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getHazardousAction()
    {
        /** @var NeoRepository $neoRepository */
        $neoRepository = $this->getDoctrine()->getRepository(Neo::class);

        $view = $this->view($neoRepository->getHazardousNeos());

        return $this->handleView($view);
    }

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getFastestAction(Request $request)
    {
        // Get boolean value for 'hazardous' from request query string
        $hazardous = $request->query->getBoolean('hazardous');

        /** @var NeoRepository $neoRepository */
        $neoRepository = $this->getDoctrine()->getRepository(Neo::class);

        $view = $this->view($neoRepository->getFastestNeos($hazardous));

        return $this->handleView($view);
    }

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getBestYearAction(Request $request)
    {
        // Get boolean value for 'hazardous' from request query string
        $hazardous = $request->query->getBoolean('hazardous');

        /** @var NeoRepository $neoRepository */
        $neoRepository = $this->getDoctrine()->getRepository(Neo::class);

        $view = $this->view($neoRepository->getBestYear($hazardous));

        return $this->handleView($view);
    }
}
