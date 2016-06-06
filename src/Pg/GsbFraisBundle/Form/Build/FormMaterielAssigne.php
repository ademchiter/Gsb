<?php 

namespace Ia\GemahBundle\Form\Build;

use Symfony\Component\Form\FormBuilderInterface;

// Use pour acceder au formulaire :
use Ia\GemahBundle\Form\Formulairedecision;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoGsb;
use Symfony\Component\Form\AbstractType;

;

class FormMaterielAssigne extends AbstractType
{  

  public function buildForm(FormBuilderInterface $builder, array $options){

   $pdo= PdoGsb::getPdoGsb();



    // On ajoute les champs de l'entité que l'on veut à notre formulaire

         $builder


            ->add('numSerieMateriel',     'text', array('label'=>'N° série du matériel : ', 'required' => false))

            ->add('Rechercher', 'submit')
          ;


  }

    public function getName()
    {
        return 'materiel_assigne';
    }



}


?>