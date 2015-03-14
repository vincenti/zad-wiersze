<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/pani-twardowska.html", name="pani-twardowska")
     */
    public function paniTwardowskaAction()
    {
        return $this->render('default/pani-twardowska.html.twig');
    }

    /**
     * @Route("/modlitwa-wieczorna.html", name="modlitwa-wieczorna")
    */
    public function modlitwaWieczornaAction()
    {
    return $this->render('default/modlitwa-wieczorna.html.twig');
    }

    /*
     * A
     */

    /*
     * B
     */
        /**
    *@Route("/poemat-lublin.html", name="poemat-lublin")
    */
    public function poematLublinAction()
    {
    return $this->render('default/poemat-lublin.html.twig');
    }

    /*
     * C
     */
    /**
 * @Route("/cud.html", name="cud")
 */
public function cudAction()
{
    return $this->render('default/cud.html.twig');
}

    /*
     * D
     */

    /*
     * E
     */

    /*
     * F
     */
    /**
     * @Route("/w-ogrodzie.html", name="w-ogrodzie")
    */
    public function  wOgrodzieAction()
    {
    return $this->render('default/w-ogrodzie.html.twig');
    }
    /**
     * @Route("/list-do-syna.html", name="list-do-syna")
    */
    public function  listdoSynaAction()
    {
    return $this->render('default/list-do-syna.html.twig');
    }

    /*
     * G
     */
/**
 * @Route("/game-over.html", name="game-over")
 */
public function gameoverAction()
{
    return $this->render('default/game-over.html.twig');
}
    /*
     * H
     */
/**
 * @Route("/hymn.html", name="hymn")
 */
public function hymnAction()
{
    return $this->render('default/hymn.html.twig');
}

    /*
     * I
     */

    /*
     * J
     */

    /*
     * K
     */

    /*
     * L
     */

     /**
     * @Route("/w-weronie.html", name="w-weronie")
     */
     public function wweronieAction()
     {
        return $this->render('default/w-weronie.html.twig');
     }

    /*
     * M
     */

    /*
     * N
     */

    /*
     * O
     */

     /**
     * @Route("/swiat.html", name="swiat")
     */
     public function swiatAction()
     {
       return $this->render('default/swiat.html.twig');
     }

    /*
     * P
     */

    /*
     * Q
     */

    /*
     * R
     */
   /**
     * @Route("/rzepka.html", name="rzepka")
     */
    public function rzepkaAction()
    {
        return $this->render('default/rzepka.html.twig');
    }

    /*
     * S
     */


    /**
     * @Route("/stepy-akermanskie.html", name="stepy-akermanskie")
     */
    public function stepyAkermanskieAction()
    {
        return $this->render('default/stepy-akermanskie.html.twig');
    }


    /*
     * T
     */

    /**
     * @Route("/testament-moj.html", name="testament-moj")
     */
    public function  testamentMojAction()
    {
        return $this->render('default/testament-moj.html.twig');
    }

    /*
     * U
     */

    /*
     * V
     */

    /*
     * W
     */

    /*
     * X
     */

    /*
     * Y
     */

    /**
    * @Route("/zasypiamy_na_slowach.html", name="zasypiamy_na_slowach")
    */
    public function zasypiamynaslowachAction()
    {
        return $this->render('default/zasypiamy_na_slowach.html.twig');
    }
    
    /**
     * @Route("/dom-marzen.html", name="dom-marzen")
     */
    public function dommarzenAction()
    {
        return $this->render('default/dom-marzen.html.twig');
    }

     /**
     * @Route("/wiersz-o-chlopcu-polskim.html", name="wiersz-o-chlopcu-polskim")
     */
    public function wierszochlopcupolskimAction()
    {
        return $this->render('default/wiersz-o-chlopcu-polskim.html.twig');
    }

    /**
     * @Route("/deszcz-jesienny.html", name="dzeszcz-jesienny")
     */
    public function  deszczJesiennyAction()
    {
       return $this->render('default/deszcz-jesienny.html.twig');
    }
}
