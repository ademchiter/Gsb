<?php 

namespace Pg\GsbFraisBundle\Form;

class FormulaireEleve
{      
    private $numImmat;
    private $marque;
    private $modele;
    private $couleur;
   

    public function getnumImmat()
    {
        return $this->numImmat;
    }

    public function setnumImmat($numImmat)
    {
        $this->numImmat = $numImmat;
    }

    public function getmarque()
    {
        return $this->marque;
    }

    public function setmarque($marque)
    {
        $this->marque = $marque;
    }

    public function getmodele()
    {
        return $this->modele;
    }

    public function setmodele($modele)
    {
        $this->modele = $modele; 
    }

     public function getcouleur()
    {
        return $this->couleur;
    }

    public function setcouleur($couleur)
    {
        $this->couleur = $couleur;
    }
 
}

?>
