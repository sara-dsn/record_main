<?php

namespace ContainerPWyYPS3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserFormAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\UserFormAuthenticator' shared autowired service.
     *
     * @return \App\Security\UserFormAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\UserFormAuthenticator'] = new \App\Security\UserFormAuthenticator(($container->services['router'] ?? self::getRouterService($container)));
    }
}
