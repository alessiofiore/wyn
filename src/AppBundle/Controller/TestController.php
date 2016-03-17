<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    /**
     * @Route("/test/number")
     */
    public function numberAction()
    {
        $number = rand(0, 100);
		
		$html = $this->container->get('templating')->render('test/number.html.twig', array('luckyNumber' => $number));
		return new Response($html);
    }
	
	/**
     * @Route("/test", name="test")
     */
    public function indexAction()
    {
        $content = 'This is the body of test page';
		
		$html = $this->container->get('templating')->render('test/index.html.twig', array('content' => $content));
		return new Response($html);
    }
}