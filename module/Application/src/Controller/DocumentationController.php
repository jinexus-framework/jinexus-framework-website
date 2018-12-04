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
     * @return ViewModel
     */
    public function walkthroughAction()
    {
        return new ViewModel([
            'mainSidebar' => [
                'active' => ['walkthrough']
            ]
        ]);
    }
}