<?php

namespace ContainerQru9sV1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConstraintViolationListInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.2MKwkl1.Symfony\Component\Validator\ConstraintViolationListInterface' shared service.
     *
     * @return \Symfony\Component\Validator\ConstraintViolationListInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.2MKwkl1": it references interface "Symfony\\Component\\Validator\\ConstraintViolationListInterface" but no such service exists. Did you create a class that implements this interface?');
    }
}
