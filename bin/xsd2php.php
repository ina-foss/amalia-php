#!/usr/bin/env php
<?php
require('./vendor/autoload.php');
use Symfony\Component\Console\Application;
use Goetas\Xsd\XsdToPhp\Command\ConvertToPHP;
error_reporting(error_reporting() &~E_NOTICE);
$cli = new Application('Convert XSD to PHP classes Command Line Interface', "2.0");
$cli->setCatchExceptions(true);
$cli->addCommands(array(
    new \Goetas\Xsd\XsdToPhp\Command\ConvertToPHP(),
    new \Goetas\Xsd\XsdToPhp\Command\ConvertToYaml()
));
$cli->run();