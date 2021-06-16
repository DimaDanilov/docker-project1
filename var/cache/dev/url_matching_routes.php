<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1' => [[['_route' => 'app_api_common_default_index', '_controller' => 'App\\Api\\Common\\Controller\\DefaultController::indexAction'], null, null, null, true, false, null]],
        '/api/v1/pizzas' => [
            [['_route' => 'app_api_pizzas_pizza_index', '_controller' => 'App\\Api\\Pizzas\\Controller\\PizzaController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_pizzas_pizza_create', '_controller' => 'App\\Api\\Pizzas\\Controller\\PizzaController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v1/users' => [
            [['_route' => 'app_api_user_user_index', '_controller' => 'App\\Api\\User\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_user_user_create', '_controller' => 'App\\Api\\User\\Controller\\UserController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v1/users/validation' => [[['_route' => 'app_api_user_user_validation', '_controller' => 'App\\Api\\User\\Controller\\UserController::validation'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/v1/(?'
                    .'|pizzas/([a-f0-9]{24})(?'
                        .'|(*:77)'
                    .')'
                    .'|users/([a-f0-9]{24})(?'
                        .'|(*:108)'
                        .'|/contact(*:124)'
                        .'|(*:132)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [
            [['_route' => 'app_api_pizzas_pizza_show', '_controller' => 'App\\Api\\Pizzas\\Controller\\PizzaController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_pizzas_pizza_update', '_controller' => 'App\\Api\\Pizzas\\Controller\\PizzaController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_pizzas_pizza_delete', '_controller' => 'App\\Api\\Pizzas\\Controller\\PizzaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        108 => [[['_route' => 'app_api_user_user_show', '_controller' => 'App\\Api\\User\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        124 => [[['_route' => 'app_api_user_user_createcontact', '_controller' => 'App\\Api\\User\\Controller\\UserController::createContact'], ['id'], ['POST' => 0], null, false, false, null]],
        132 => [
            [['_route' => 'app_api_user_user_update', '_controller' => 'App\\Api\\User\\Controller\\UserController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_user_user_delete', '_controller' => 'App\\Api\\User\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
