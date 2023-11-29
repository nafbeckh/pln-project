<?php

error_reporting(E_ALL);

require_once __DIR__ . "/vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

new App\Config();
new App\Core\Bootstrap();
