<?php

namespace Atlas\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AlphaLemon\ThemeEngineBundle\Core\Rendering\Controller\FrontendController;


class DefaultController extends FrontendController
{
    public function indexAction($name)
    {
        return $this->render('AtlasWebsiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
