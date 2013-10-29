<?php
require_once __DIR__ . '/../vendor/autoload.php';

//Используем микрофреймворк Silex
$app = new Silex\Application();

$app['debug'] = true;

//И шаблонизатор Twig, который легко интегрируется в Silex
$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => [__DIR__ . '/../views']
]);

//При заходе в корень нашего сайта, сработает контроллер описанный в анонимной функции ниже
$app->get('/', function() use ($app) {

    //TimerClass определён в библиотеке super_lib.
    //Благодаря сгенерированному autoloader.php нужный файл библиотеки подключится автоматически
    $timer = new TimerClass();

    //Функция get_ip() определена в библиотеке super_lib.
    //Благодаря сгенерированному autoloader.php нужный файл библиотеки подключится автоматически
    $ip = get_ip();> $timer->getCurrentTime(),
        'ip' => 

    $templateVars = [
        'msg' => 'Hello, Cpmposer',

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
