<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
	/**
	 * @Route ("/", name="default")
	 * @return Response
	 */
	public function index():Response
	{
		return $this->render('app.html.twig');
//		return $this->render('app.html.twig', [
//			'controller_name' => 'DefaultController',
//		]);
	}

//	/**
//	 * @Route("/hello", name="hello")
//	 */
//	public function hello(AdapterInterface $cache):JsonResponse
//	{
//		$hello = $cache->getItem('hello');
//
//		if ($hello->isHit())
//			return $this->json(false);
//
//		$hello->set(true);
//		$cache->save($hello);
//
//		return $this->json(true);
//	}

}
