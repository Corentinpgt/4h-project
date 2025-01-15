<?php

namespace Container4SpwFOj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\BookCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\BookCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/BookCrudController.php';

        $container->services['App\\Controller\\Admin\\BookCrudController'] = $instance = new \App\Controller\Admin\BookCrudController();

        $instance->setContainer(($container->privates['.service_locator.5PWTx9U'] ?? $container->load('get_ServiceLocator_5PWTx9UService'))->withContext('App\\Controller\\Admin\\BookCrudController', $container));

        return $instance;
    }
}
