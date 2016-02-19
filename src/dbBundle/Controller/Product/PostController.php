<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 13.02.16
 * Time: 12:13
 */

namespace dbBundle\Controller\Product;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use dbBundle\Entity\Product;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    /**
     * @Route("/product/")
     * @Method ("POST")
     * @param Request $request
     * @return JsonResponse
     */

    public function createAction(Request $request)
    {
        $json=json_decode($request->getContent(),true);

        /**@var Product $product  */
        $product = new Product();

            $product
                ->setName($json['name'])
                ->setPrice($json['price'])
                ->setDescription($json['description']);


        $em = $this->getDoctrine()->getManager();

        $em->persist($product);
        $em->flush();

        $jsonResponse = array(
            'id' => $product->getId()
        );

        return new JsonResponse($jsonResponse);
    }
}