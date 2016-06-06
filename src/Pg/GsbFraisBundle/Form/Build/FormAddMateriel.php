<?php 

namespace Ia\GemahBundle\Form\Build;

use Symfony\Component\Form\FormBuilderInterface;

// Use pour acceder au formulaire :
use Ia\GemahBundle\Form\Formulairedecision;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoGsb;
use Symfony\Component\Form\AbstractType;

;

class FormAddMateriel extends AbstractType
{  

  public function buildForm(FormBuilderInterface $builder, array $options){





    // On ajoute les champs de l'entité que l'on veut à notre formulaire

         $builder

            ->add('numSerieMateriel', 'text', array('label'=>'n° de série du matériel : '))
            ->add('typeMateriel', 'choice', array('label'=>'Type de matériel : ', 
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
                                                                     'Ordinateur Tactile' => 'Ordinateur Tactile',
                                                                     'Souris SCAN' => 'Souris SCAN',
                                                                     'Tablette Tactile' => 'Tablette Tactile'), 
                                                                     'preferred_choices'=> array('Ordinateur 12', 'Ordinateur 15', 'Ordinateur 17', 'Souris', 'Sac à dos', 'Clé USB' )))
            ->add('marqueMateriel', 'text', array('label'=>'Marque de matériel : '))
            ->add('modeleMateriel', 'text', array('label'=>'Modèle du matériel : '))
            ->add('prixTTC', 'number', array('label'=>'Prix TTC : ','invalid_message' => 'Veuillez rentrer une donnée valide'))
            ->add('nomFournisseur', 'text', array('label'=>'Nom du fournisseur : '))
            ->add('numDevis', 'text', array('label'=>'n° de devis : '))
            ->add('numFormChorus',   'text', array('label'=>'n° de formulaire CHORUS : '))
            ->add('numEj', 'text', array('label'=>'n° d\'engagement juridique EJ : '))
            ->add('dateEj', 'date', array('label'=>'Date d\'engagement juridique EJ : '))
            ->add('dateFacture', 'date', array('label'=>'Date de facture : '))
            ->add('dateServiceFait', 'date', array('label'=>'Date de service fait : '))
            ->add('numFactureChorus',   'text', array('label'=>'n° de facture CHORUS : '))
            ->add('acheterPour',   'text', array('label'=>'Acheté pour : '))
            ->add('etatMateriel',   'choice', array('label'=>'Etat du matériel : ', 'choices' => array('Disponible' => 'Disponible', 'Non disponible' => 'Non disponible')))
            ->add('dateFinGarantie', 'date', array('label'=>'Date de fin de garantie : '))
             // ->add('author',    'text')
             // ->add('published', 'checkbox')

         //   'attr'=> array('style'=>'display:none')
          ;



  }

    public function getName()
    {
        return 'materiel_home';
    }



}


?>