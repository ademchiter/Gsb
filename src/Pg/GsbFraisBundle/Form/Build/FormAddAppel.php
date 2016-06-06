<?php 

namespace Ia\GemahBundle\Form\Build;

use Symfony\Component\Form\FormBuilderInterface;

// Use pour acceder au formulaire :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoGsb;
use Symfony\Component\Form\AbstractType;



class FormAddAppel extends AbstractType
{  

  public function buildForm(FormBuilderInterface $builder, array $options){



    // On ajoute les champs de l'entité que l'on veut à notre formulaire

         $builder

            ->add('dateAppelSav', 'date', array('label'=>'Date d\'appel: '))
            ->add('motifAppelSav', 'text', array('label'=>'Motif de l\'appel: ' ))
            ->add('detailAppelSav', 'textarea', array('label'=>'Détail du motif : '))
            ->add('dateRdvSav', 'date', array('label'=>'Date de prise de RDV : '))
            // ->add('refDecision', 'text', array('label'=>'detailTypeResolSav: '))

         //   'attr'=> array('style'=>'display:none')
          ;



  }

    public function getName()
    {
        return 'materiel_home';
    }



}


?>