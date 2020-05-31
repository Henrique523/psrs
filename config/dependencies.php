<?php

use Alura\Cursos\Infra\EntityManagerCreator;
use DI\Container;
use Doctrine\ORM\EntityManagerInterface;

$containerBuilder = new Container();

$containerBuilder->addDefinitions([
    EntityManagerInterface::class => function () {
        return (new EntityManagerCreator())->getEntityManager();
    }
]);

return $containerBuilder->build();
