<?php

namespace ContainerD31YT0V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCoderControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sergeydrak\SubscriptionBundle\Controller\CoderController' shared autowired service.
     *
     * @return \Sergeydrak\SubscriptionBundle\Controller\CoderController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/.bundles/SubscriptionBundle/src/Controller/CoderController.php';

        $a = ($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService'));

        $container->services['Sergeydrak\\SubscriptionBundle\\Controller\\CoderController'] = $instance = new \Sergeydrak\SubscriptionBundle\Controller\CoderController($a, $a);

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('Sergeydrak\\SubscriptionBundle\\Controller\\CoderController', $container));

        return $instance;
    }
}
