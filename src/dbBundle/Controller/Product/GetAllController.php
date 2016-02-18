<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 13.02.16
 * Time: 22:18
 */

namespace dbBundle\Controller\Product;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use dbBundle\Entity\Product;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class GetAllController extends Controller
{
    /**
     * @Route("/product/")
     * @Method ("GET")
     */

    public function showAllAction()
    {
        /**@var Product[] $products  */
        $products = $this->getDoctrine()
            ->getRepository('dbBundle:Product')
            ->findAll();
        $json=array();
        foreach ($products as $product){
            $json[]=array(
                'id' => $product->getId(),
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'description' => $product->getDescription()
            );
        }
        return new JsonResponse($json);
    }
}