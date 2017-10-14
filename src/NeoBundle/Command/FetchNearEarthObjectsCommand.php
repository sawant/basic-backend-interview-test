<?php
/**
 * User: sawant
 * Date: 14/10/2017
 */

namespace NeoBundle\Command;

use Doctrine\ORM\OptimisticLockException;
use NeoBundle\Manager\GatewayAPIManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class FetchNearEarthObjectsCommand
 *
 * @package NeoBundle\Command
 */
class FetchNearEarthObjectsCommand extends ContainerAwareCommand
{
    /**
     * Configure the command
     *
     * @TODO: Allow option to enter start and end dates through command-line
     */
    protected function configure()
    {
        $this->setName('app:neo:fetch')
             ->setDescription('Fetches Near Earth Objects (NEOs) data from NASA\'s API and persists it to the database');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var GatewayAPIManager $apiGatewayManager */
        $apiGatewayManager = $this->getContainer()->get('neo.api.gateway');

        // Data from 3 days ago till today
        $startDate = date('Y-m-d', strtotime('-3 days'));
        $endDate   = date('Y-m-d');

        try {
            $count = $apiGatewayManager->fetchAndSaveData($startDate, $endDate);

            $output->writeln('Total NEO objects fetched from NASA: ' . $count . '.');
        } catch (OptimisticLockException $e) {
            $output->writeln('There was an issue fetching and saving the data: ' . $e);
        }


    }
}