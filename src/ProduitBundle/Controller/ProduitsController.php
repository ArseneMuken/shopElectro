<?php

namespace ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use ProduitBundle\Entity\Article;

class ProduitsController extends Controller
{
    /**
     * @Route("/", name="listeProduit")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getManager()// avoir un entity manager
            ->getRepository('ProduitBundle:Article');
        //on récupère toutes les articles
        $articles = $repository->findAll();

        $paginator  = $this->get('knp_paginator')->paginate( $articles,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            9/*nbre d'éléments par page*/);

        return $this->render('ProduitBundle:Produits:homepageProduit.html.twig', [
            'article' =>   $paginator
            ,]);
    }

}
