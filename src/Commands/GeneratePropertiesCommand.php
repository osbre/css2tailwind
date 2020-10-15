<?php

namespace CSS2Tailwind\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GeneratePropertiesCommand extends Command
{
    protected function configure()
    {
        $this->setName('generate');
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {


        return 1;
    }
}