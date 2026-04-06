#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\SingleCommandApplication;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;


/* $application->addCommand(new TeapotCommand); */
(new SingleCommandApplication)
  ->setCode( function (InputInterface $input, OutputInterface $output) : int {
    $output->writeln("🫖 I'm a teapot");
    return Command::FAILURE;
  })
  ->run();

