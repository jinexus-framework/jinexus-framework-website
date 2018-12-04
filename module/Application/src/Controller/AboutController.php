<?php
namespace Application\Controller;

use JiNexus\Mvc\Controller\AbstractController;
use JiNexus\Mvc\Model\ViewModel;

/**
 * Class AboutController
 * @package Application\Controller
 */
class AboutController extends AbstractController
{
    /**
     * @throws \JiNexus\Route\Exception
     */
    public function indexAction()
    {
        $this->redirect->toRoute('application.about.author');
    }

    public function authorAction()
    {
        return new ViewModel();
    }

    public function conductAction()
    {
        return new ViewModel();
    }

    public function creditsAction()
    {
        return new ViewModel();
    }

    public function licenseAction()
    {
        return new ViewModel();
    }
}