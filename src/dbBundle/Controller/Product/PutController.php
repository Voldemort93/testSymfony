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

class PutController extends Controller
{
    /**
     * @Route("/product/{id}")
     * @Method ("PUT")
     */
    public function updateAction($id)
    {

        /**@var Product $product  */
        $product = new Product();

        $json[]=array(
            'name' => 'NEW NEW NEW',
            'price' => '1255.00',
            'description' => 'from put method'
        );

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('dbBundle:Product')->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        foreach ($json as $j) {
            $product->setName($j['name']);
            $product->setPrice($j['price']);
            $product->setDescription($j['description']);
        }
        $em->flush();

//        return $this->redirectToRoute('homepage');
        return new JsonResponse(array());
    }
}