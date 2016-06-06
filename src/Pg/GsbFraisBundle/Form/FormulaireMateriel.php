<?php 

namespace Ia\GemahBundle\Form;


class FormulaireMateriel
{  
    private $numSerieMateriel;
    private $typeMateriel;
    private $marqueMateriel;
    private $modeleMateriel;
    private $prixTTC;
    private $nomFournisseur;
    private $numDevis;
    private $numFormChorus;
    private $numEj;
    private $dateEj;
    private $dateFacture;
    private $dateServiceFait;
    private $numFactureChorus;
    private $acheterPour;
    private $dateFinGarantie;
    private $etatMateriel;

    public function getNumSerieMateriel()
  {
    return $this->numSerieMateriel;
  }


    public function setNumSerieMateriel($numSerieMateriel)
  {
    $this->numSerieMateriel = $numSerieMateriel;
  }


    public function getTypeMateriel()
  {
    return $this->typeMateriel;
  }


    public function setTypeMateriel($typeMateriel)
  {
    $this->typeMateriel = $typeMateriel;
  }


    public function getMarqueMateriel()
  {
    return $this->marqueMateriel;
  }


    public function setMarqueMateriel($marqueMateriel)
  {
    $this->marqueMateriel = $marqueMateriel;
  }


    public function getModeleMateriel()
  {
    return $this->modeleMateriel;
  }


    public function setModeleMateriel($modeleMateriel)
  {
    $this->modeleMateriel = $modeleMateriel;
  }


    public function getPrixTTC()
  {
    return $this->prixTTC;
  }


    public function setPrixTTC($prixTTC)
  {
    $this->prixTTC = $prixTTC;
  }


    public function getNomFournisseur()
  {
    return $this->nomFournisseur;
  }


    public function setNomFournisseur($nomFournisseur)
  {
    $this->nomFournisseur = $nomFournisseur;
  }


    public function getNumDevis()
  {
    return $this->numDevis;
  }

    public function setNumDevis($numDevis)
  {
    $this->numDevis = $numDevis;
  }


    public function getNumFormChorus()
  {
    return $this->numFormChorus;
  }


    public function setNumFormChorus($numFormChorus)
  {
    $this->numFormChorus = $numFormChorus;
  }


    public function getNumEj()
  {
    return $this->numEj;
  }


    public function setNumEJ($numEj)
  {
    $this->numEj = $numEj;
  }

    public function getDateEj()
  {
    return $this->dateEj;
  }


    public function setDateEj($dateEj)
  {
    $this->dateEj = $dateEj->format('Y-m-d');
  }


    public function getDateFacture()
  {
    return $this->dateFacture;
  }


    public function setDateFacture($dateFacture)
  {
    $this->dateFacture = $dateFacture->format('Y-m-d');
  }


    public function getDateServiceFait()
  {
    return $this->dateServiceFait;
  }


    public function setDateServiceFait($dateServiceFait)
  {
    $this->dateServiceFait = $dateServiceFait->format('Y-m-d');
  }


    public function getNumFactureChorus()
  {
    return $this->numFactureChorus;
  }


    public function setNumFactureChorus($numFactureChorus)
  {
    $this->numFactureChorus = $numFactureChorus;
  }


    public function getAcheterPour()
  {
    return $this->acheterPour;
  }


    public function setAcheterPour($acheterPour)
  {
    $this->acheterPour = $acheterPour;
  }

      public function getEtatMateriel()
  {
    return $this->etatMateriel;
  }

    public function setEtatMateriel($etatMateriel)
  {
    $this->etatMateriel = $etatMateriel;
  }



    public function getDateFinGarantie()
  {
    return $this->dateFinGarantie;
  }

    public function setDateFinGarantie($dateFinGarantie)
  {
    $this->dateFinGarantie = $dateFinGarantie->format('Y-m-d');
  }
 
}

?>