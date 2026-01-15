<?php
abstract class Category {
    abstract public function getMyCategory();
}
class Attualità extends Category {
    public function getMyCategory() {
        return "Ho scelto questa categoria per vedere il mio livello di intelligenza \n";
    }
}
class Sport extends Category {
    public function getMyCategory() {
        return "Ho scelto questo categoria per mantenermi in forma \n";
    }
}
class Gossip extends Category {
    public function getMyCategory() {
        return "Ho scelto questo categoria per rilassarmi e chiaccherare con un po di persone. \n";
    }
}
class Storia extends Category {
    public function getMyCategory() {
        return "Ho scelto questo categoria perchè mi sono appassionato per questa materia \n";
    }
}
trait Iscrizione {
    public function pagamento() {
        echo "Sono uno studente che ha scelto questa categoria con l'obiettivo di iscrivermi in modo da far avverrare i miei sogni \n";
    }
}
class Corso {
    use Iscrizione;
    public $getMyCategory;
    public function __construct(Category $categoria) {
        $this->getMyCategory = $categoria;
    }
    public function materia() {
        $this->getMyCategory->getMyCategory();
    }
}
$subject = new Corso(new Storia);
// print_r($subject);
$subject->materia();