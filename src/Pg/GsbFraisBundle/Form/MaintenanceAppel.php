<?php 

namespace Ia\GemahBundle\Form;


class MaintenanceAppel
{  
    private $dateAppelSav;
    private $motifAppelSav;
    private $detailAppelSav;
    private $dateRdvSav;

    public function getDateAppelSav()
  {
    return $this->dateAppelSav;
  }


    public function setDateAppelSav($dateAppelSav)
  {
    $this->dateAppelSav = $dateAppelSav->format('Y-m-d');
  }


    public function getMotifAppelSav()
  {
    return $this->motifAppelSav;
  }


    public function setMotifAppelSav($motifAppelSav)
  {
    $this->motifAppelSav = $motifAppelSav;
  }


    public function getDetailAppelSav()
  {
    return $this->detailAppelSav;
  }


    public function setDetailAppelSav($detailAppelSav)
  {
    $this->detailAppelSav = $detailAppelSav;
  }


    public function getDateRdvSav()
  {
    return $this->dateRdvSav;
  }


    public function setDateRdvSav($dateRdvSav)
  {
    $this->dateRdvSav = $dateRdvSav->format('Y-m-d');
  }

}

?>