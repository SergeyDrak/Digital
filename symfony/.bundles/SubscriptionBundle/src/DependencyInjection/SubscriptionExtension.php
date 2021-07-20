<?php

namespace Sergeydrak\SubscriptionBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class SubscriptionExtension
 *
 * @package Sergeydrak\SubscriptionBundle\DependencyInjection
 */
class SubscriptionExtension extends Extension
{

    /**
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
          $container,
          new FileLocator(__DIR__.'/../../config')
        );
        $loader->load('services.yaml');
    }

}