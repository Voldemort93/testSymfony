<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 13.02.16
 * Time: 22:46
 */

namespace dbBundle\Controller\Product;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use dbBundle\Entity\Product;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class GetController extends Controller
{
    /**
     * @Route("/product/{id}")
     * @Method ("GET")
     */

    public function showAllAction($id)
    {
        /**@var Product $product  */
        $product = $this->getDoctrine()
            ->getRepository('dbBundle:Product')
            ->find($id);

        $json=array(
            'id' => $product->getId(),
            'name' => $product->getName(),
            'price' => $product->getPrice(),
            'description' => $product->getDescription()
        );

        return new JsonResponse($json);
    }
}