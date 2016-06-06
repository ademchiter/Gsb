<?php 

namespace Ia\GemahBundle\Form\Build;

use Symfony\Component\Form\FormBuilderInterface;

// Use pour acceder au formulaire :
use Ia\GemahBundle\Form\Formulairedecision;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoGsb;
use Symfony\Component\Form\AbstractType;

;

class FormRechercheMateriel extends AbstractType
{  

  public function buildForm(FormBuilderInterface $builder, array $options){



    // On ajoute les champs de l'entité que l'on veut à notre formulaire

         $builder
            ->add('typeMateriel', 'choice', array('label'=>'Type : ', 
                                                     'required' => false,
                                                  'choices' => array('Ordinateur 12' => 'Ordinateur 12', 
                                                                     'Ordinateur 15' => 'Ordinateur 15', 
                                                                     'Ordinateur 17' => 'Ordinateur 17',
                                                                     'Souris' => 'Souris',
                                                                     'Sac à dos' => 'Sac à dos',
                                                                     'Clé USB' => 'Clé USB',
                                                                     'Clavier CLEVY' => 'Clavier CLEVY',
                                                                     'Imprimante' => 'Imprimante',
                                                                     'Scanner' => 'Scanner',
                                                                     'Imprimante/Scanner' => 'Imprimante/Scanner',
                                                                     'Iriscan' => 'Iriscan',
                                                                     'Ordinateur Tactile' => 'Ordinateur tactile',
                                                                     'Souris SCAN' => 'Souris SCAN',
                                                                     'Tablette Tactile' => 'Tablette tactile'), 
                                                                     'preferred_choices'=> array('Ordinateur 12', 'Ordinateur 15', 'Ordinateur 17', 'Souris', 'Sac à dos', 'Clé USB' )))
 
            ->add('marqueMateriel',      'text', array('label'=>"Marque :", 'required' => false))

            ->add('numSerieMateriel',     'text', array('label'=>'N° série : ', 'required' => false))

            ->add('Rechercher', 'submit')
          ;


  }

    public function getName()
    {
        return 'materiel_recherche';
    }



}


?>