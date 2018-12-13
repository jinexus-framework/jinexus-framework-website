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
    /**
     * @return ViewModel
     * @throws \JiNexus\Route\Exception
     */
    public function indexAction()
    {
        $request = $this->http->getRequest();

        return new ViewModel([
            'title' => 'JiNexus Framework',
            'meta' => [
                'description' => 'A modular, lightweight and easy to use PHP framework and probably the smallest and fastest MVC framework',
                'og' => [
                    'url' => $request->baseUrl() . $this->view->url('application.home'),
                    'description' => 'A modular, lightweight and easy to use PHP framework and probably the smallest and fastest MVC framework',
                    'image' => $request->baseUrl() . $this->view->basePath('asset/img/cover-photo/jinexus-framework-home-cover.png'),
                ],
            ],
        ]);
    }
}