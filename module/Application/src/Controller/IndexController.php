<?php
namespace Application\Controller;

use JiNexus\Mvc\Controller\AbstractController;
use JiNexus\Mvc\Model\ViewModel;

/**
 * Class IndexController
 * @package Application\Controller
 */
class IndexController extends AbstractController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}