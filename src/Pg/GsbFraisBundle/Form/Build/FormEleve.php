<?php 

namespace Pg\GsbFraisBundle\Form\Build;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FormEleve extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numImmat',      'text', array('label'=>'Numéro de l\'immatriculation :' ))
            ->add('marque',     'text', array('label'=>'Marque : '))
    
            ->add('modele',     'text', array('label'=>'Modèle : '))
           ->add('couleur',   'text', array('label'=>'Couleur :'))
           ->add('enregistrer', 'submit')
        ;
    }
      
    public function getName()
    {
        return 'app_eleve';
    }
}

?>