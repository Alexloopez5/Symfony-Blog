<?php

namespace ContainerF1LCF6C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_GetRoutingConditionServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'container.get_routing_condition_service' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['container.get_routing_condition_service'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []))->get(...);
    }
}
