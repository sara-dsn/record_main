<?php

namespace ContainerPWyYPS3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccueilControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AccueilController' shared autowired service.
     *
     * @return \App\Controller\AccueilController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AccueilController'] = $instance = new \App\Controller\AccueilController(($container->privates['App\\Repository\\ArtistRepository'] ?? $container->load('getArtistRepositoryService')), ($container->privates['App\\Repository\\DiscRepository'] ?? $container->load('getDiscRepositoryService')), ($container->privates['App\\Repository\\UtilisateurRepository'] ?? $container->load('getUtilisateurRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\AccueilController', $container));

        return $instance;
    }
}