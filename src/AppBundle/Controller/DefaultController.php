<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $response = $this->render('default/index.html.twig', ['date' => date('r')]);
        $response
            ->setPublic()
            ->setSharedMaxAge(30)
        ;

        return $response;
    }

    public function dateAction(Request $request, $blockTtl)
    {
        $response = $this->render('fragment/date.html.twig', ['date' => date('r')]);
        $response
            ->setPublic()
            ->setSharedMaxAge($blockTtl)
        ;

        return $response;
    }

}
