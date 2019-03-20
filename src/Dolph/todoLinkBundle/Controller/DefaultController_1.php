<?php

namespace Dolph\todoLinkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DolphtodoLinkBundle:Default:index.html.twig');
    }
}
