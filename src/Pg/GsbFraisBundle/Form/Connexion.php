<?php 

namespace Ia\GemahBundle\Form;

class Connexion
{      
    private $nomEleves;
    private $prenomEleves;
    private $dateNaissEleves;

    public function getNomEleves()
    {
        return $this->nomEleves;
    }

    public function setNomEleves($nomEleves)
    {
        $this->nomEleves = $nomEleves;
    }

    public function getPrenomEleves()
    {
        return $this->prenomEleves;
    }

    public function setPrenomEleves($prenomEleves)
    {
        $this->prenomEleves = $prenomEleves;
    }

    public function getDateNaissEleves()
    {
        return $this->dateNaissEleves;
    }

    public function setDateNaissEleves($dateNaissEleves)
    {
        $this->dateNaissEleves = $dateNaissEleves->format('Y-m-d'); 
    }
}

?>
