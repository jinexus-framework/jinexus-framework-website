<?php
namespace Application\Controller;

use JiNexus\Mvc\Controller\AbstractController;
use JiNexus\Mvc\Model\ViewModel;

/**
 * Class DocumentationController
 * @package Application\Controller
 */
class DocumentationController extends AbstractController
{
    /**
     * @throws \JiNexus\Route\Exception
     */
    public function indexAction()
    {
        $this->redirect->toRoute('application.documentation.getting-started.introduction');
    }

    /**
     * @throws \JiNexus\Route\Exception
     */
    public function gettingStartedAction()
    {
        $this->redirect->toRoute('application.documentation.getting-started.introduction');
    }

    /**
     * @return ViewModel
     * @throws \JiNexus\Route\Exception
     */
    public function gettingStartedIntroductionAction()
    {
        $request = $this->http->getRequest();

        return new ViewModel([
            'title' => 'Documentation - JiNexus Framework',
            'meta' => [
                'description' => 'A modular, lightweight and easy to use PHP framework and probably the smallest and fastest MVC framework',
                'og' => [
                    'url' => $request->baseUrl() . $this->view->url('application.documentation.getting-started.introduction'),
                    'description' => 'Go and get started to explore our docs',
                    'image' => $request->baseUrl() . $this->view->basePath('asset/img/cover-photo/jinexus-framework-documentation-cover.png'),
                ],
            ],
            'mainSidebar' => [
                'active' => ['getting-started', 'introduction'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     * @throws \JiNexus\Route\Exception
     */
    public function gettingStartedInstallationAction()
    {
        $request = $this->http->getRequest();

        return new ViewModel([
            'title' => 'Documentation - JiNexus Framework',
            'meta' => [
                'description' => 'A modular, lightweight and easy to use PHP framework and probably the smallest and fastest MVC framework',
                'og' => [
                    'url' => $request->baseUrl() . $this->view->url('application.documentation.getting-started.installation'),
                    'description' => 'Go and get started to explore our docs',
                    'image' => $request->baseUrl() . $this->view->basePath('asset/img/cover-photo/jinexus-framework-documentation-cover.png'),
                ],
            ],
            'mainSidebar' => [
                'active' => ['getting-started', 'installation']
            ]
        ]);
    }

    /**
     * @throws \JiNexus\Route\Exception
     */
    public function walkthroughAction()
    {
        $this->redirect->toRoute('application.documentation.walkthrough.introduction');
    }

    /**
     * @return ViewModel
     * @throws \JiNexus\Route\Exception
     */
    public function walkthroughIntroductionAction()
    {
        $request = $this->http->getRequest();

        return new ViewModel([
            'title' => 'Documentation - JiNexus Framework',
            'meta' => [
                'description' => 'A modular, lightweight and easy to use PHP framework and probably the smallest and fastest MVC framework',
                'og' => [
                    'url' => $request->baseUrl() . $this->view->url('application.documentation.walkthrough.introduction'),
                    'description' => 'Go and get started to explore our docs',
                    'image' => $request->baseUrl() . $this->view->basePath('asset/img/cover-photo/jinexus-framework-documentation-cover.png'),
                ],
            ],
            'mainSidebar' => [
                'active' => ['walkthrough', 'introduction'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     * @throws \JiNexus\Route\Exception
     */
    public function walkthroughModuleManagerAction()
    {
        $request = $this->http->getRequest();

        return new ViewModel([
            'title' => 'Documentation - JiNexus Framework',
            'meta' => [
                'description' => 'A modular, lightweight and easy to use PHP framework and probably the smallest and fastest MVC framework',
                'og' => [
                    'url' => $request->baseUrl() . $this->view->url('application.documentation.walkthrough.module-manager'),
                    'description' => 'Go and get started to explore our docs',
                    'image' => $request->baseUrl() . $this->view->basePath('asset/img/cover-photo/jinexus-framework-documentation-cover.png'),
                ],
            ],
            'mainSidebar' => [
                'active' => ['walkthrough', 'module-manager'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     * @throws \JiNexus\Route\Exception
     */
    public function walkthroughControllerAction()
    {
        $request = $this->http->getRequest();

        return new ViewModel([
            'title' => 'Documentation - JiNexus Framework',
            'meta' => [
                'description' => 'A modular, lightweight and easy to use PHP framework and probably the smallest and fastest MVC framework',
                'og' => [
                    'url' => $request->baseUrl() . $this->view->url('application.documentation.walkthrough.controller'),
                    'description' => 'Go and get started to explore our docs',
                    'image' => $request->baseUrl() . $this->view->basePath('asset/img/cover-photo/jinexus-framework-documentation-cover.png'),
                ],
            ],
            'mainSidebar' => [
                'active' => ['walkthrough', 'controller'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     * @throws \JiNexus\Route\Exception
     */
    public function walkthroughRouteAction()
    {
        $request = $this->http->getRequest();

        return new ViewModel([
            'title' => 'Documentation - JiNexus Framework',
            'meta' => [
                'description' => 'A modular, lightweight and easy to use PHP framework and probably the smallest and fastest MVC framework',
                'og' => [
                    'url' => $request->baseUrl() . $this->view->url('application.documentation.walkthrough.route'),
                    'description' => 'Go and get started to explore our docs',
                    'image' => $request->baseUrl() . $this->view->basePath('asset/img/cover-photo/jinexus-framework-documentation-cover.png'),
                ],
            ],
            'mainSidebar' => [
                'active' => ['walkthrough', 'route'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     * @throws \JiNexus\Route\Exception
     */
    public function walkthroughHttpRequestAction()
    {
        $request = $this->http->getRequest();

        return new ViewModel([
            'title' => 'Documentation - JiNexus Framework',
            'meta' => [
                'description' => 'A modular, lightweight and easy to use PHP framework and probably the smallest and fastest MVC framework',
                'og' => [
                    'url' => $request->baseUrl() . $this->view->url('application.documentation.walkthrough.http-request'),
                    'description' => 'Go and get started to explore our docs',
                    'image' => $request->baseUrl() . $this->view->basePath('asset/img/cover-photo/jinexus-framework-documentation-cover.png'),
                ],
            ],
            'mainSidebar' => [
                'active' => ['walkthrough', 'http-request'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     * @throws \JiNexus\Route\Exception
     */
    public function walkthroughViewAction()
    {
        $request = $this->http->getRequest();

        return new ViewModel([
            'title' => 'Documentation - JiNexus Framework',
            'meta' => [
                'description' => 'A modular, lightweight and easy to use PHP framework and probably the smallest and fastest MVC framework',
                'og' => [
                    'url' => $request->baseUrl() . $this->view->url('application.documentation.walkthrough.view'),
                    'description' => 'Go and get started to explore our docs',
                    'image' => $request->baseUrl() . $this->view->basePath('asset/img/cover-photo/jinexus-framework-documentation-cover.png'),
                ],
            ],
            'mainSidebar' => [
                'active' => ['walkthrough', 'view'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     * @throws \JiNexus\Route\Exception
     */
    public function walkthroughConfigAction()
    {
        $request = $this->http->getRequest();

        return new ViewModel([
            'title' => 'Documentation - JiNexus Framework',
            'meta' => [
                'description' => 'A modular, lightweight and easy to use PHP framework and probably the smallest and fastest MVC framework',
                'og' => [
                    'url' => $request->baseUrl() . $this->view->url('application.documentation.walkthrough.config'),
                    'description' => 'Go and get started to explore our docs',
                    'image' => $request->baseUrl() . $this->view->basePath('asset/img/cover-photo/jinexus-framework-documentation-cover.png'),
                ],
            ],
            'mainSidebar' => [
                'active' => ['walkthrough', 'config'],
            ]
        ]);
    }
}