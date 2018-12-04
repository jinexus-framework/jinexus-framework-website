<?php
namespace Application\Controller;

use JiNexus\Mvc\Controller\AbstractController;
use JiNexus\Mvc\Model\ViewModel;

/**
 * Class ChangelogController
 * @package Application\Controller
 */
class ChangelogController extends AbstractController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}