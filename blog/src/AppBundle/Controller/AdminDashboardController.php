<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
* @Route("/admin")
*/
class AdminDashboardController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('admin/index.html.twig');
    }

}
