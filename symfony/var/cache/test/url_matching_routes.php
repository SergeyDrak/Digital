<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserAuthSecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserAuthSecurityController::logout'], null, null, null, false, false, null]],
        '/subscribers' => [[['_route' => 'subscribers_list', '_controller' => 'Sergeydrak\\SubscriptionBundle\\Controller\\SubscribersListController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'subscription_form_viiew', '_controller' => 'Sergeydrak\\SubscriptionBundle\\Controller\\SubscriptionFormViewController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
