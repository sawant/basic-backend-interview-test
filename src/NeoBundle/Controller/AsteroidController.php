<?php
/**
 * User: Sawant
 * Date: 14/10/2017
 */

namespace NeoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use NeoBundle\Entity\Neo;
use NeoBundle\Repository\NeoRepository;

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
}
