<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProductListController extends AbstractController
{

    public function index() : response
    {


        return $this->render('productlist.html.twig');
    }



}