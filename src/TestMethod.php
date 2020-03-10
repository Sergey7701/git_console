<?php
namespace App;

// src/Command/CreateUserCommand.php


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class TestMethod extends Command
{

    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this->setname('print_string')
            ->addArgument('string', InputArgument::REQUIRED, 'Who do you want to greet?')
            ->addArgument('times', InputArgument::OPTIONAL, 'How many times print?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');
        $times = $input->getArgument('times') ? $input->getArgument('times') : 1;
        for ($i = 0; $i < $times; $i++) {
            $output->writeln("$string");
        }
        return 0;
    }
}
