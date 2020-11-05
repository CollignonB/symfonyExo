<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class firstAppController extends AbstractController
{
    /** 
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $articleRepository = $this->getDoctrine()->getRepository(Article::class);
        $articles = $articleRepository->findAll();

        return $this->render('firstApp/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/article/{id}", name="single",requirements={"id"="\d+"})
     */
    // int $id = 1
    public function single(int $id): Response
    {
        $articleRepository = $this->getDoctrine()->getRepository(Article::class);
        $article = $articleRepository->find($id);
        $articleDate = $article->getDateCreation()->format("d/m/Y");

        return $this->render('firstApp/single.html.twig', [
            'article' => $article,
            'date' => $articleDate,
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