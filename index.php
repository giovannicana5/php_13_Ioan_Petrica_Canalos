<?php
require('class.php');
class Post {
    private $title;
    private $category;
    private $tag;
    public function __constructor($titolo, Category $categoria, $etichetta) {
        $this->title = $titolo;
        $this->category = $categoria;
        $this->tag = $etichetta;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getCategory() {
        return $this->category->getMyCategory();
    }
    public function getTag() {
        return $this->tag;
    }
}
$user = new Post("Titolo", new Storia(), "Etichetta");
$utenti = new Post("Titolo", new Gossip(), "Etichetta");
$user->getCategory();
$utenti->getTitle();