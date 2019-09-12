<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\ArticlesSearch;
use App\Form\ArticleSearchType;
use App\Repository\ArticlesRepository;
use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ArticlesRepository $articles, CategoriesRepository $categories, Request $request): Response
    {
        $search = new ArticlesSearch();
        $form = $this->createForm(ArticleSearchType::class, $search);
//        $form->handleRequest($request);

        if ($request->query->get('categorie')) {
            $articles = $articles->findByCategorie($request->query->get('categorie'));
        } else {
            $articles = $articles->findAll();
        }

        return $this->render('home/index.html.twig', [
            'articles' => $articles,
            'current_page' => 'articles',
            'categories' => $categories->findAll(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="article", methods={"GET"})
     */
    public function show(Articles $article, CategoriesRepository $categorie): Response
    {
        return $this->render('home/show.html.twig', [
            'current_page' => 'article',
            'article' => $article,
            'categorie' => $categorie->find($article->getCategorie())->getTitle()
        ]);
    }
}
