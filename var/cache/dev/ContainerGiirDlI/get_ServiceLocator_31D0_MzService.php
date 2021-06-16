<?php

namespace ContainerGiirDlI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_31D0_MzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.31D0.mz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.31D0.mz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pizzaRepository' => ['privates', 'App\\Core\\Pizzas\\Repository\\PizzaRepository', 'getPizzaRepositoryService', true],
        ], [
            'pizzaRepository' => 'App\\Core\\Pizzas\\Repository\\PizzaRepository',
        ]);
    }
}
