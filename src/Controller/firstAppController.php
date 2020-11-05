<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class firstAppController extends AbstractController
{
    /** 
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $index = "je suis la page d'index";
        return $this->render('firstApp/index.html.twig', [
            'index' => $index,
        ]);
    }

    /**
     * @Route("/article/{id}", name="single",requirements={"id"="\d+"})
     */
    public function single(int $id = 1): Response
    {
        return $this->render('firstApp/single.html.twig', [
            'id' => $id,
        ]);
    }

    /**
     * @Route("/admin/article/add", name="add")
     */
    public function add(): Response
    {
        return $this->render('firstApp/adminAdd.html.twig');
    }

}