<?php 

namespace Ia\GemahBundle\Form\Build;
require_once("/var/www/html/gemah/src/Ia/GemahBundle/Controller/include/fct.inc.php");

use Symfony\Component\Form\FormBuilderInterface;

// Use pour acceder au formulaire :
use Ia\GemahBundle\Form\Formulairedecision;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoGsb;
use Symfony\Component\Form\AbstractType;

;


class FormEditDecision extends AbstractType
{  

  public function buildForm(FormBuilderInterface $builder, array $options){

//    $pdo= PdoGsb::getPdoGsb();
//    $t = $pdo -> getDonneDecision();




// $te = strtotime($t[1]);
// $date1 = MaFonction($te);

// $tee = strtotime($t[2]);
// $date = MaFonction($tee);

// $teee = strtotime($t[4]);
// $dates = MaFonction($teee);

//          $builder

        
//             ->add('dateCDA', 'date', array('label'=>'Date CDA : ', 'data' => $date1))
//             ->add('dateNotif', 'date', array('label'=>'Date Notif : ', 'data' => $date))
//             ->add('nomEnsRef', 'text', array('label'=>'NomEnsRef : ', 'data' => $t[3]))
//             ->add('dateLimiteDecision', 'date', array('label'=>'Date Limite Decision : ', 'data' => $dates))
//             ->add('numDossMdph', 'text', array('label'=>'Num Doss Mdph : ', 'data' => $t[5]))
//             ->add('nomSuivi', 'text', array('label'=>'Nom Suivi : ', 'data' => $t[6]))
//              // ->add('author',    'text')
//              // ->add('published', 'checkbox')
//              ->add('Enregistrer', 'submit')
//           ;


  }

    public function getName()
    {
        return 'decision_edit';
    }


}


?>