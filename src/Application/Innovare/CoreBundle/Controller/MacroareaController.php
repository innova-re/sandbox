<?php

namespace Application\Innovare\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MacroareaController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction()
    {
        $macroareas = $this->getDoctrine()->getRepository('ApplicationInnovareModelBundle:Macroarea')->findAll();

        return array(
            'macroareas' => $macroareas
        );
    }
}
