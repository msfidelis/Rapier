#!/usr/bin/env php
<?php
use Rapier\core\System\Rapier;

if (!$loader = include __DIR__ . '/vendor/autoload.php') {
    die('Autoloader não encontrado. Instale as dependências com composer install');
};

return (new Rapier())->run();

