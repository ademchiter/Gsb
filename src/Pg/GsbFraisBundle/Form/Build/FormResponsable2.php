<?php 

namespace Ia\GemahBundle\Form\Build;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FormResponsable2 extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civiliteResponsable',      'text', array('label'=>'Civilité du responsable légal : ' ))
            ->add('nomResponsable',     'text', array('label'=>'Nom du responsable légal : '))
            ->add('prenomResponsable',     'text', array('label'=>'Prénom du responsable légal :'))
            ->add('cpResponsable',      'text', array('label'=>'CP du responsable légal :'))
            ->add('adresseResponsable',     'text', array('label'=>'Adresse du responsable légal : '))
            ->add('villeResponsable',   'text', array('label'=>'Ville du responsable légal :'))
            ->add('telResponsable',     'text', array('label'=>'Téléphone du responsable légal : '))
            ->add('mailResponsable',     'text', array('label'=>'Mail du responsable légal : '))
        ;
    }

    public function getName()
    {
        return 'app_eleve';
    }
}

?>

