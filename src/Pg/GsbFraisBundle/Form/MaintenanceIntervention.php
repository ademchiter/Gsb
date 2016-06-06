<?php 

namespace Ia\GemahBundle\Form;


class MaintenanceIntervention
{  
    private $dateInterventionSav;
    private $typeProblSav;
    private $detailTypeProblSav;
    private $typeResolSav;
    private $detailTypeResolSav;
    private $dateResolSav;
    private $dateRecupSav;
    private $ObservSav;

    public function getDateInterventionSav()
  {
    return $this->dateInterventionSav;
  }


    public function setDateInterventionSav($dateInterventionSav)
  {
    $this->dateInterventionSav = $dateInterventionSav->format('Y-m-d');
  }


    public function getTypeProblSav()
  {
    return $this->typeProblSav;
  }


    public function setTypeProblSav($typeProblSav)
  {
    $this->typeProblSav = $typeProblSav;
  }


    public function getDetailTypeProblSav()
  {
    return $this->detailTypeProblSav;
  }


    public function setDetailTypeProblSav($detailTypeProblSav)
  {
    $this->detailTypeProblSav = $detailTypeProblSav;
  }


    public function getTypeResolSav()
  {
    return $this->typeResolSav;
  }


    public function setTypeResolSav($typeResolSav)
  {
    $this->typeResolSav = $typeResolSav;
  }


    public function getDetailTypeResolSav()
  {
    return $this->detailTypeResolSav;
  }


    public function setDetailTypeResolSav($detailTypeResolSav)
  {
    $this->detailTypeResolSav = $detailTypeResolSav;
  }


    public function getDateResolSav()
  {
    return $this->dateResolSav;
  }


    public function setDateResolSav($dateResolSav)
  {
    $this->dateResolSav = $dateResolSav->format('Y-m-d');
  }


    public function getDateRecupSav()
  {
    return $this->dateRecupSav;
  }

    public function setDateRecupSav($dateRecupSav)
  {
    $this->dateRecupSav = $dateRecupSav->format('Y-m-d');
  }


    public function getObservSav()
  {
    return $this->ObservSav;
  }


    public function setObservSav($ObservSav)
  {
    $this->ObservSav = $ObservSav;
  }

}

?>