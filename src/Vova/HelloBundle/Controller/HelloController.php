<?php

namespace Vova\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Buzz\Message\Response;
use Buzz\Message\Request;
use Buzz\Client\Curl;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HelloController extends Controller
{
    /**
     * @param Request $request
     * @param $name
     * @return JsonResponse
     * @Route ("/hello/{name}")
     */
    public function indexAction(Request $request, $name)
    {


        $buzz = $this->container->get('buzz');
        $response = $buzz->get('http://api.ipify.org/');
        $requestBuzz= new Request();
        $responseBuzz= new Response();
        $CurlBuzz= new Curl();
        $requestBuzz->setHost('http://api.ipify.org');
        $requestBuzz->setResource('/?format=json');
        $requestBuzz->setMethod('GET');
        $a = $response->getContent();
        $CurlBuzz->send($requestBuzz,$responseBuzz);
        $responseBuzz->getContent();
        return new JsonResponse($a);
    }
}
