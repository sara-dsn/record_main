<?php

namespace ContainerPWyYPS3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2TlXYmEService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.2TlXYmE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2TlXYmE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'MailService' => ['privates', 'App\\Service\\MailService', 'getMailServiceService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'MailService' => 'App\\Service\\MailService',
            'entityManager' => '?',
            'mailer' => '?',
        ]);
    }
}
