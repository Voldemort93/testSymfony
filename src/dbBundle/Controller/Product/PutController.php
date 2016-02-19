<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 13.02.16
 * Time: 22:55
 */

namespace dbBundle\Controller\Product;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use dbBundle\Entity\Product;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class PutController extends Controller
{
    /**
     * @Route("/product/{id}")
     * @Method ("PUT")
     * @param Request $request
     * @return JsonResponse
     */
    public function updateAction(Request $request, $id)
    {
        $json=json_decode($request->getContent(),true);
        /**@var Product $product  */
        $product = new Product();

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('dbBundle:Product')->find($id);

        $product
            ->setName($json['name'])
            ->setPrice($json['price'])
            ->setDescription($json['description']);

        $em->flush();

        return new JsonResponse(array());
    }
}