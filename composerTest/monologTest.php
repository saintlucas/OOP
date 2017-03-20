<?php

require'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
echo('Prosty przykład użycia loggera Monolog<br>');
// utworzenie kanału logowania
$log = new Logger('infoLogger');
$log->pushHandler(new StreamHandler(__DIR__ . '/log/info.log', Logger::DEBUG)); $log->addInfo('skrypt rozpoczął działanie');
for($i = 0; $i < 10; $i++) { $log->addInfo($i . '. obrót pętli');
}
$log->addInfo('skrypt zakończył działanie');