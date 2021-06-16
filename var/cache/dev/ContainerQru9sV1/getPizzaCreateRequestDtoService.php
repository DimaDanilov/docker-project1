<?php

namespace ContainerQru9sV1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPizzaCreateRequestDtoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Api\Pizzas\Dto\PizzaCreateRequestDto' shared autowired service.
     *
     * @return \App\Api\Pizzas\Dto\PizzaCreateRequestDto
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Api/Pizzas/Dto/PizzaCreateRequestDto.php';

        return $container->privates['App\\Api\\Pizzas\\Dto\\PizzaCreateRequestDto'] = new \App\Api\Pizzas\Dto\PizzaCreateRequestDto();
    }
}
