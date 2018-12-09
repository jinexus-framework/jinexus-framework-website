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
        'application.documentation.getting-started' => [
            'options' => [
                'route' => '/documentation/getting-started',
                'controller' => DocumentationController::class,
                'action' => 'gettingStarted',
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
        'application.documentation.walkthrough.introduction' => [
            'options' => [
                'route' => '/documentation/walkthrough/introduction',
                'controller' => DocumentationController::class,
                'action' => 'walkthroughIntroduction',
            ],
        ],
        'application.documentation.walkthrough.module-manager' => [
            'options' => [
                'route' => '/documentation/walkthrough/module-manager',
                'controller' => DocumentationController::class,
                'action' => 'walkthroughModuleManager',
            ],
        ],
        'application.documentation.walkthrough.controller' => [
            'options' => [
                'route' => '/documentation/walkthrough/controller',
                'controller' => DocumentationController::class,
                'action' => 'walkthroughController',
            ],
        ],
        'application.documentation.walkthrough.route' => [
            'options' => [
                'route' => '/documentation/walkthrough/route',
                'controller' => DocumentationController::class,
                'action' => 'walkthroughRoute',
            ],
        ],
        'application.documentation.walkthrough.http-request' => [
            'options' => [
                'route' => '/documentation/walkthrough/http-request',
                'controller' => DocumentationController::class,
                'action' => 'walkthroughHttpRequest',
            ],
        ],
        'application.documentation.walkthrough.view' => [
            'options' => [
                'route' => '/documentation/walkthrough/view',
                'controller' => DocumentationController::class,
                'action' => 'walkthroughView',
            ],
        ],
        'application.documentation.walkthrough.config' => [
            'options' => [
                'route' => '/documentation/walkthrough/config',
                'controller' => DocumentationController::class,
                'action' => 'walkthroughConfig',
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