<?php

namespace ContainerPWyYPS3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_ExpressionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator(($container->privates['validator.expression_language'] ?? $container->load('getValidator_ExpressionLanguageService')));
    }
}
