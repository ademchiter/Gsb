<?php 

namespace Ia\GemahBundle\Form\Build;

use Symfony\Component\Form\FormBuilderInterface;

// Use pour acceder au formulaire :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoGsb;
use Symfony\Component\Form\AbstractType;

class FormAddIntervention extends AbstractType
{  

  public function buildForm(FormBuilderInterface $builder, array $options){



    // On ajoute les champs de l'entité que l'on veut à notre formulaire

         $builder

            ->add('dateInterventionSav', 'date', array('label'=>'Date d\'intervention sur la machine : '))
            ->add('typeProblSav', 'text', array('label'=>'Type de problème : ' ))
            ->add('detailTypeProblSav', 'textarea', array('label'=>'Détail type de problème : '))
            ->add('typeResolSav', 'text', array('label'=>'Type de résolution : '))
            ->add('detailTypeResolSav', 'textarea', array('label'=>'Détail type de résolution : '))
            ->add('dateResolSav', 'date', array('label'=>'Date de résolution : '))
            ->add('dateRecupSav', 'date', array('label'=>'Date de récupération de la machine : '))
            ->add('ObservSav',   'textarea', array('label'=>'Observations diverses : '))
          

         //   'attr'=> array('style'=>'display:none')
          ;



  }

    public function getName()
    {
        return 'add_intervention';
    }



}


?>