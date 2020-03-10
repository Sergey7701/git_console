<?php
namespace App;

// src/Command/CreateUserCommand.php


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class TestMethod extends Command
{

    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this->setname('questions')
            ->addArgument('string', InputArgument::REQUIRED, 'String to print?')
            ->addArgument('times', InputArgument::OPTIONAL, 'How many times print?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper   = $this->getHelper('question');
        $question = new ConfirmationQuestion('Continue with this action?', false);
        if (!$helper->ask($input, $output, $question)) {
            return;
        }
    }
}
