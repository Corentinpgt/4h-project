<?php

namespace Container4SpwFOj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagCrudControllerconfigureResponseParametersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ib1WIGE.App\Controller\Admin\TagCrudController::configureResponseParameters()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ib1WIGE.App\\Controller\\Admin\\TagCrudController::configureResponseParameters()'] = ($container->privates['.service_locator.ib1WIGE'] ?? $container->load('get_ServiceLocator_Ib1WIGEService'))->withContext('App\\Controller\\Admin\\TagCrudController::configureResponseParameters()', $container);
    }
}
