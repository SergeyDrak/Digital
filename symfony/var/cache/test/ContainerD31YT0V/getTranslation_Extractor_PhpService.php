<?php

namespace ContainerD31YT0V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Extractor_PhpService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\PhpExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/PhpExtractor.php';

        return $container->privates['translation.extractor.php'] = new \Symfony\Component\Translation\Extractor\PhpExtractor();
    }
}
