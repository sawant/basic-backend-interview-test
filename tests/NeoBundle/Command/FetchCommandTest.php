<?php
/**
 * User: Sawant
 * Date: 14/10/2017
 */

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use NeoBundle\Command\FetchNearEarthObjectsCommand;

class FetchCommandTest extends WebTestCase
{
    public function testExecute()
    {
        $kernel = $this->createKernel();
        $kernel->boot();

        $application = new Application($kernel);
        $application->add(new FetchNearEarthObjectsCommand());

        $command       = $application->find('app:neo:fetch');
        $commandTester = new CommandTester($command);

        $commandTester->execute(['command'  => $command->getName()]);

        // Regex: "^[A-Za-z: ]*[\d]+\." will match "{any alphabet characters string}: ##." where ## is an int value
        // Effectively, we want to match: "Total NEO objects fetched from NASA: ##."
        $this->assertRegExp('/^[A-Za-z: ]*[\d]+\./', $commandTester->getDisplay());
    }
}