<?php 
namespace App\Service;

use App\Entity\Article;

class swearCleaner
{
    const SWEAR = ["connard", "pute", "salop", "salope"];

    public function cleanSwear(Article $article): Article
    {
        $newMsg = [];
        $msg = explode(" ", $article->getContenu());
        foreach($msg as $mot)
        {
            foreach(self::SWEAR as $swear)
            {
                if($mot === $swear)
                {
                    $tailleMot = strlen($swear);
                    $mot = "";
                    for($i=0; $i<$tailleMot; $i++)
                    {
                        $mot .= "#";
                    }
                }
            }
            
            array_push($newMsg, $mot);
        }
        dump($newMsg);
        $article->setContenu(implode(" ", $newMsg));
        dump($article->getContenu());
        return $article;
    }
}