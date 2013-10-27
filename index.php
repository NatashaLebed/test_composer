<?php

namespace test_composer;

require 'vendor/autoload.php';

echo "Hello, composer!!!";
use vendor\monolog\monolog\src\Logger;
use vendor\monolog\monolog\src\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(__DIR__ . '/test/data.log', Logger::WARNING));

// add records to the log
$log->addWarning('Foo');
$log->addError('Bar');
$log->addInfo('Do your magic here.');
