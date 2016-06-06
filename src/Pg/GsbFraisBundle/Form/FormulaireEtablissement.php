<?php 

namespace Ia\GemahBundle\Form;

class FormulaireEleve
{      
    private $codeEtablissement;
    private $typeEtablissement;
    private $nomEtablissement;
    private $degreEtablissement;
    private $regimeEtablissement;
    private $adresseEtablissement;
    private $cpEtablissement;
    private $villeEtablissement;
    private $telEtablissement;

    public function getCodeEtablissement()
    {
        return $this->codeEtablissement;
    }

    public function setCodeEtablissement(codeEtablissement)
    {
        $this->codeEtablissement = $codeEtablissement;
    }

    public function getTypeEtablissement()
    {
        return $this->typeEtablissement;
    }

    public function setTypeEtablissement($typeEtablissement)
    {
        $this->typeEtablissement = $typeEtablissement;
    }

    public function getNomEtablissement()
    {
        return $this->nomEtablissement;
    }

    public function setNomEtablissement($nomEtablissement)
    {
        $this->nomEtablissement = $nomEtablissement; 
    }

     public function getDegreEtablissement()
    {
        return $this->degreEtablissement;
    }

    public function setDegreEtablissement($degreEtablissement)
    {
        $this->degreEtablissement = $degreEtablissement;
    }

    public function getRegimeEtablissement()
    {
        return $this->regimeEtablissement;
    }

    public function setRegimeEtablissement($regimeEtablissement)
    {
        $this->regimeEtablissement = $regimeEtablissement;
    }

    public function getAdresseEtablissement()
    {
        return $this->adresseEtablissement;
    }

    public function setAdresseEtablissement($adresseEtablissement)
    {
        $this->adresseEtablissement = $adresseEtablissement;
    }

    public function getCpEtablissement()
    {
        return $this->cpEtablissement;
    }

    public function setCpEtablissement($cpEtablissement)
    {
        $this->cpEtablissement = $cpEtablissement;
    }

    public function getVilleEtablissement()
    {
        return $this->villeEtablissement;
    }

    public function setVilleEtablissement($villeEtablissement)
    {
        $this->villeEtablissement = $villeEtablissement;
    }

    public function getTelEtablissement()
    {
        return $this->telEtablissement;
    }

    public function setTelEtablissement($telEtablissement)
    {
        $this->telEtablissement = $telEtablissement;
    }
}

?>
