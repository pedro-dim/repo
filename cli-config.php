<?php


require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Factories' . DIRECTORY_SEPARATOR . 'EntityManagerFactory.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;



return ConsoleRunner::createHelperSet($entityManager);
