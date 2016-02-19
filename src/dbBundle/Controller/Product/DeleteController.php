<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 13.02.16
 * Time: 23:01
 */

namespace dbBundle\Controller\Product;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use dbBundle\Entity\Product;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class DeleteController extends Controller
{
    /**
     * @Route("/product/{id}")
     * @Method ("DELETE")
     * @param Request $request
     * @return JsonResponse
     */
    public function DeleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('dbBundle:Product')->find($id);

        $em->remove($product);
        $em->flush();

        return new JsonResponse(array());
    }

}