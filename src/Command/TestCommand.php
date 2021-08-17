<?php

namespace App\Command;

use App\RiskService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

class TestCommand extends Command
{
    protected static $defaultName = 'test';

    public function __construct(private RiskService $riskService)
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('test');

        dd($this->riskService->getAvailableMethods());

        return 0;
    }
}
