<?php

namespace ContainerPWyYPS3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_SchemaCreateCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:schema:create');

        return $instance;
    }
}
