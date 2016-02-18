<?php

namespace dbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use dbBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/myDB")
     */
    public function indexAction()
    {
        return $this->render('dbBundle:Default:index.html.twig');
    }
}
