<?php

namespace InstantMagazine\Monolog\Logger;

use Monolog\Logger;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MonologFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator) // : Logger
    {
        return new Logger('zf2-monolog');
    }
}
