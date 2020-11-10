<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Service\swearCleaner;

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

    public function single(int $id): Response
    {
        $articleRepository = $this->getDoctrine()->getRepository(Article::class);
        $article = $articleRepository->find($id);
        $articleDate = $article->getDateCreation()->format("d/m/Y");

        // $swearCleaner = new SwearCleaner();

        // $article = $swearCleaner->cleanSwear($article);

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

        /**
     * @Route("/createAccount", name="createAccount")
     */
    public function createAccount(): Response
    {
        return $this->render('firstApp/addAccount.html.twig');
    }

}