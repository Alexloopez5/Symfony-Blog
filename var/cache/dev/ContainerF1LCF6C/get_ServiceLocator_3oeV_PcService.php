<?php

namespace ContainerF1LCF6C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3oeV_PcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3oeV.Pc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3oeV.Pc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::categories' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController::images' => ['privates', '.service_locator.aUsFPsv', 'get_ServiceLocator_AUsFPsvService', true],
            'App\\Controller\\BlogController::buscar' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BlogController::index' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BlogController::like' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BlogController::newPost' => ['privates', '.service_locator.aUsFPsv', 'get_ServiceLocator_AUsFPsvService', true],
            'App\\Controller\\BlogController::post' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PageController::contact' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PageController::index' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PageController::newpost' => ['privates', '.service_locator.aUsFPsv', 'get_ServiceLocator_AUsFPsvService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.spC.Z_T', 'get_ServiceLocator_SpC_ZTService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AdminController:categories' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController:images' => ['privates', '.service_locator.aUsFPsv', 'get_ServiceLocator_AUsFPsvService', true],
            'App\\Controller\\BlogController:buscar' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BlogController:index' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BlogController:like' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BlogController:newPost' => ['privates', '.service_locator.aUsFPsv', 'get_ServiceLocator_AUsFPsvService', true],
            'App\\Controller\\BlogController:post' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PageController:contact' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PageController:index' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PageController:newpost' => ['privates', '.service_locator.aUsFPsv', 'get_ServiceLocator_AUsFPsvService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.spC.Z_T', 'get_ServiceLocator_SpC_ZTService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AdminController::categories' => '?',
            'App\\Controller\\AdminController::images' => '?',
            'App\\Controller\\BlogController::buscar' => '?',
            'App\\Controller\\BlogController::index' => '?',
            'App\\Controller\\BlogController::like' => '?',
            'App\\Controller\\BlogController::newPost' => '?',
            'App\\Controller\\BlogController::post' => '?',
            'App\\Controller\\PageController::contact' => '?',
            'App\\Controller\\PageController::index' => '?',
            'App\\Controller\\PageController::newpost' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:categories' => '?',
            'App\\Controller\\AdminController:images' => '?',
            'App\\Controller\\BlogController:buscar' => '?',
            'App\\Controller\\BlogController:index' => '?',
            'App\\Controller\\BlogController:like' => '?',
            'App\\Controller\\BlogController:newPost' => '?',
            'App\\Controller\\BlogController:post' => '?',
            'App\\Controller\\PageController:contact' => '?',
            'App\\Controller\\PageController:index' => '?',
            'App\\Controller\\PageController:newpost' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
