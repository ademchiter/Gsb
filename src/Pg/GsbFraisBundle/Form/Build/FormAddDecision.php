<?php 

namespace Ia\GemahBundle\Form\Build;

use Symfony\Component\Form\FormBuilderInterface;

// Use pour acceder au formulaire :
use Ia\GemahBundle\Form\Formulairedecision;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoGsb;
use Symfony\Component\Form\AbstractType;

;

class FormAddDecision extends AbstractType
{  

  public function buildForm(FormBuilderInterface $builder, array $options){

   $pdo= PdoGsb::getPdoGsb();
    $nomeleve = $pdo ->getNomEleve();
    $prenomeleve = $pdo ->getPrenomEleve();
    $materiel= $pdo -> getMateriel();



$eleveetnom="";

foreach (array_combine($nomeleve, $prenomeleve) as $nomeleve =>$prenomeleve )
{
 $eleveetnom.=$nomeleve." ".$prenomeleve."-";
  

}

$personne = explode('-', $eleveetnom, -1);

    // On ajoute les champs de l'entité que l'on veut à notre formulaire

         $builder

            ->add('dateCDA', 'date', array('label'=>'Date CDA : '))
            ->add('dateNotif', 'date', array('label'=>'Date Notif : '))
            ->add('nomEnsRef', 'text', array('label'=>'Nom enseignant référent : '))
            ->add('telEnsRef', 'text', array('label'=>'Téléphone enseignant référent : '))
            ->add('dateLimiteDecision', 'date', array('label'=>'Date Limite décision : '))
            ->add('numDossMdph', 'text', array('label'=>'Numéro Dossier Mdph : '))
            ->add('nomSuivi', 'text', array('label'=>'Nom Suivi : '))
            ->add('dateConvention', 'date', array('label'=>'Date de la convention suivi : '))
            ->add('refEleve', 'choice', array('label'=>'Eleve : ', 'choices' => $personne))

            // ->add('refMateriel',   'choice', array('label'=>'Materiel attribué : ', 'choices' => $materiel))
             // ->add('author',    'text')
             // ->add('published', 'checkbox')
             ->add('Enregistrer', 'submit')
          ;
 

  }

    public function getName()
    {
        return 'decision_home';
    }





}



?>