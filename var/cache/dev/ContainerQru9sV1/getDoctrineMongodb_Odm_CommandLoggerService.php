<?php

namespace ContainerQru9sV1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_CommandLoggerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.command_logger' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\APM\PSRCommandLogger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/APM/CommandLoggerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/APM/PSRCommandLogger.php';

        $a = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));

        return $container->privates['doctrine_mongodb.odm.command_logger'] = new \Doctrine\Bundle\MongoDBBundle\APM\PSRCommandLogger($a);
    }
}
