<?php
namespace App;

// src/Command/CreateUserCommand.php


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class UserInput extends Command
{

// the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this->setname('questions');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper         = $this->getHelper('question');
        $questionName   = new Question('Как вас зовут? ');
        $questionAge    = new Question('Сколько вам лет? ');
        $questionGender = new ChoiceQuestion('Ваш пол? ', [
            'М',
            'Ж',
            ],
                                             0
        );
        $name           = $helper->ask($input, $output, $questionName);
        $age            = $helper->ask($input, $output, $questionAge);
        $gender         = $helper->ask($input, $output, $questionGender);
        $output->write($name . ' ');
        $output->write($age . ' ');
        $output->writeln($gender);
        return 1;
    }
}
