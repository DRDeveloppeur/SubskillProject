<?php
namespace App\Entity;

class ArticlesSearch {

    /**
     * @var int|null
     */
    private $categorie;

    /**
     * @return int|null
     */
    public function getCategorie(): ?int
    {
        return $this->categorie;
    }

    /**
     * @param int|null $categorie
     * @return ArticlesSearch
     */
    public function setCategorie(int $categorie): ArticlesSearch
    {
        $this->categorie = $categorie;
        return $this;
    }


}