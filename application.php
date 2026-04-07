#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use Charles\Command\TeapotCommand;
use Symfony\Component\Console\Application;

$application = new Application;

$teapotCommand = new TeapotCommand;

$application->addCommands([$teapotCommand]);

$application->setDefaultCommand($teapotCommand->getName(),true);

$application->run();


