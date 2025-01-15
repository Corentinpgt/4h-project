<?php

namespace ContainerG4HqxTP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\TagCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\TagCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/TagCrudController.php';

        $container->services['App\\Controller\\Admin\\TagCrudController'] = $instance = new \App\Controller\Admin\TagCrudController();

        $instance->setContainer(($container->privates['.service_locator.5PWTx9U'] ?? $container->load('get_ServiceLocator_5PWTx9UService'))->withContext('App\\Controller\\Admin\\TagCrudController', $container));

        return $instance;
    }
}
