<?php

namespace ContainerD31YT0V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSymfonycasts_ResetPassword_CleanerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'symfonycasts.reset_password.cleaner' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\Util\ResetPasswordCleaner
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Util/ResetPasswordCleaner.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Persistence/ResetPasswordRequestRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Persistence/Fake/FakeResetPasswordInternalRepository.php';

        return $container->privates['symfonycasts.reset_password.cleaner'] = new \SymfonyCasts\Bundle\ResetPassword\Util\ResetPasswordCleaner(($container->privates['symfonycasts.reset_password.fake_request_repository'] ?? ($container->privates['symfonycasts.reset_password.fake_request_repository'] = new \SymfonyCasts\Bundle\ResetPassword\Persistence\Fake\FakeResetPasswordInternalRepository())), true);
    }
}
