<?php 

namespace Ia\GemahBundle\Form;


class Formulairedecision
{  

  // Déclaration des variables du formulaire
     private $dateCda;
     private $dateNotif;
     private $nomEnsRef;
     private $dateLimiteDecision;
     private $numDossMdph;
     private $nomSuivi;
     private $dateConvention;
     private $refEleve;
     private $annexe;
     private $telEnsRef;



  //Get des variables
    public function getDateCda()
  {
    return $this->dateCda;
  }

    public function getDateNotif()
  {
    return $this->dateNotif;
  }

      public function getNomEnsRef()
  {
    return $this->nomEnsRef;
  }

      public function getDateLimiteDecision()
  {
    return $this->dateLimiteDecision;
  }

      public function getNumDossMdph()
  {
    return $this->numDossMdph;
  }

      public function getNomSuivi()
  {
    return $this->nomSuivi;
  }

    public function getRefEleve()
  {
    return $this->refEleve;
  }

    public function getDateConvention()
  {
    return $this->dateConvention;
  }

    public function getAnnexe()
  {
    return $this->annexe;
  }


    public function getTelEnsRef()
  {
    return $this->telEnsRef;
  }

  /**

 */


  // Set des variables
    public function setDateCda($dateCda)
  {
    $this->dateCda = $dateCda->format('Y-m-d');
  }

      public function setDateNotif($dateNotif)
  {
    $this->dateNotif = $dateNotif->format('Y-m-d');
  }

      public function setNomEnsRef($nomEnsRef)
  {
    $this->nomEnsRef = $nomEnsRef;
  }

      public function setDateLimiteDecision($dateLimiteDecision)
  {
    $this->dateLimiteDecision = $dateLimiteDecision->format('Y-m-d');
  }

      public function setNumDossMdph($numDossMdph)
  {
    $this->numDossMdph = $numDossMdph;
  }

      public function setNomSuivi($nomSuivi)
  {
    $this->nomSuivi = $nomSuivi;
  }

    public function setRefEleve($refEleve)
  {
    $this->refEleve = $refEleve;
  }

   public function setDateConvention($dateConvention)
  {
    $this->dateConvention = $dateConvention->format('Y-m-d');
  }

   public function setAnnexe($annexe)
  {
    $this->annexe = $annexe;
  }

   public function settelEnsRef($telEnsRef)
  {
    $this->telEnsRef = $telEnsRef;
  }

}

?>