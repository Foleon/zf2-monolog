<?php
namespace InstantMagazine\Monolog;

use Zend\Mvc\ResponseSender\SendResponseEvent;
use Zend\Mvc\MvcEvent;
use ZF\ApiProblem\Listener\SendApiProblemResponseListener;

class Module
{
    public function getConfig(): array
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
