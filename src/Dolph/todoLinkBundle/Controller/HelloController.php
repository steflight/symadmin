<?php
namespace Dolph\todoLinkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DolphtodoLinkBundle:Hello:index.html.twig',array(
            'name' => $name
        ));
    }
}
