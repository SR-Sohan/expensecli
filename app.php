#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';
use App\CliApp;
use Symfony\Component\Console\Application;

$application = new Application();


$application->add(new CliApp());

$application->run();