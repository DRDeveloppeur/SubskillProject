<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Ho7wU.E' shared service.

return $this->privates['.service_locator.Ho7wU.E'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'article' => ['privates', '.errored..service_locator.Ho7wU.E.App\\Entity\\Articles', NULL, 'Cannot autowire service ".service_locator.Ho7wU.E": it references class "App\\Entity\\Articles" but no such service exists.'],
], [
    'article' => 'App\\Entity\\Articles',
]);
