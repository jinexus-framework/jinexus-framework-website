<?php
namespace Application;

use Application\Controller\AboutController;
use Application\Controller\ChangelogController;
use Application\Controller\IndexController;
use Application\Controller\DocumentationController;

return [
    'routes' => [
        'application.home' => [
            'options' => [
                'route' => '/',
                'controller' => IndexController::class,
                'action' => 'index',
            ],
        ],
        'application.documentation' => [
            'options' => [
                'route' => '/documentation',
                'controller' => DocumentationController::class,
                'action' => 'index',
            ],
        ],
        'application.documentation.getting-started.introduction' => [
            'options' => [
                'route' => '/documentation/getting-started/introduction',
                'controller' => DocumentationController::class,
                'action' => 'gettingStartedIntroduction',
            ],
        ],
        'application.documentation.getting-started.installation' => [
            'options' => [
                'route' => '/documentation/getting-started/installation',
                'controller' => DocumentationController::class,
                'action' => 'gettingStartedInstallation',
            ],
        ],
        'application.documentation.walkthrough' => [
            'options' => [
                'route' => '/documentation/walkthrough',
                'controller' => DocumentationController::class,
                'action' => 'walkthrough',
            ],
        ],
        'application.changelog' => [
            'options' => [
                'route' => '/changelog',
                'controller' => ChangelogController::class,
                'action' => 'index',
            ],
        ],
        'application.about' => [
            'options' => [
                'route' => '/about',
                'controller' => AboutController::class,
                'action' => 'index',
            ],
        ],
        'application.about.author' => [
            'options' => [
                'route' => '/about/author',
                'controller' => AboutController::class,
                'action' => 'author',
            ],
        ],
        'application.about.credits' => [
            'options' => [
                'route' => '/about/credits',
                'controller' => AboutController::class,
                'action' => 'credits',
            ],
        ],
        'application.about.license' => [
            'options' => [
                'route' => '/about/license',
                'controller' => AboutController::class,
                'action' => 'license',
            ],
        ],
        'application.about.conduct' => [
            'options' => [
                'route' => '/about/conduct',
                'controller' => AboutController::class,
                'action' => 'conduct',
            ],
        ],
    ],
    'view_manager' => [
        'template_map' => [
            'layout/layout' => 'layout/layout.phtml',
            'error/404' => 'error/404.phtml',
        ],
        'template_path_stack' => __DIR__ . '/../view',
    ],
];