<?php

namespace App\DataFixtures;

use App\Entity\Article;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $date = new DateTime();
        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setTitre('article'.$i);
            $article->setContenu('contenu'.$i);
            $article->setDateCreation(new \DateTime());
            $article->setNomAuteurAssocie('auteur'.$i);
            $article->setCategorieAssocie('categorie'.$i);
            $article->setNombreVues($i*15);
            $manager->persist($article);
        }

        $manager->flush();
    }
}
