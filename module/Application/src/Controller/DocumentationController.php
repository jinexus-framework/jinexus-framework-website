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
     */
    public function gettingStartedIntroductionAction()
    {
        return new ViewModel([
            'mainSidebar' => [
                'active' => ['getting-started', 'introduction'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     */
    public function gettingStartedInstallationAction()
    {
        return new ViewModel([
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
     */
    public function walkthroughIntroductionAction()
    {
        return new ViewModel([
            'mainSidebar' => [
                'active' => ['walkthrough', 'introduction'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     */
    public function walkthroughModuleManagerAction()
    {
        return new ViewModel([
            'mainSidebar' => [
                'active' => ['walkthrough', 'module-manager'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     */
    public function walkthroughControllerAction()
    {
        return new ViewModel([
            'mainSidebar' => [
                'active' => ['walkthrough', 'controller'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     */
    public function walkthroughRouteAction()
    {
        return new ViewModel([
            'mainSidebar' => [
                'active' => ['walkthrough', 'route'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     */
    public function walkthroughHttpRequestAction()
    {
        return new ViewModel([
            'mainSidebar' => [
                'active' => ['walkthrough', 'http-request'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     */
    public function walkthroughViewAction()
    {
        return new ViewModel([
            'mainSidebar' => [
                'active' => ['walkthrough', 'view'],
            ]
        ]);
    }

    /**
     * @return ViewModel
     */
    public function walkthroughConfigAction()
    {
        return new ViewModel([
            'mainSidebar' => [
                'active' => ['walkthrough', 'config'],
            ]
        ]);
    }
}