<?php 


namespace Ia\GemahBundle\Form;

require_once("/var/www/html/gemah/src/Ia/GemahBundle/Controller/include/fct.inc.php");
require_once("/var/www/html/gemah/src/Ia/GemahBundle/Controller/include/class.pdogsb.inc.php");

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormBuilderInterface;

// Use pour acceder au formulaire :
use Ia\GemahBundle\Form\Formulairedecision;

use Symfony\Component\HttpFoundation\Request;
use PdoGsb;

use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Validator\Validation;
class Formu extends Controller
{  

  public function test(){

   $pdo= PdoGsb::getPdoGsb();
    $infodecision = $pdo->getInfoDecision();
    $nomeleve = $pdo ->getNomEleve();
    $prenomeleve = $pdo ->getPrenomEleve();
    $materiel= $pdo -> getMateriel();
   



$eleveetnom="";

foreach (array_combine($nomeleve, $prenomeleve) as $nomeleve =>$prenomeleve )
{
 $eleveetnom.=$nomeleve." ".$prenomeleve."-";
  

}
// echo $eleveetnom;
$personne = explode('-', $eleveetnom, -1);
// var_dump($personne);
    // On crée un objet Formulaire
       $formulaire = new Formulairedecision();
$this;
var_dump($this);
$validator = Validation::createValidator();

$formFactory = Forms::createFormFactoryBuilder()
    // ...
    ->addExtension(new ValidatorExtension($validator))
    ->getFormFactory();

// $formBuilder = FormFactory::createBuilder('form', $formulaire);
    // On ajoute les champs de l'entité que l'on veut à notre formulaire

         $formBuilder = $formFactory->createBuilder('form', $formulaire)->getForm()

            ->add('dateCDA', 'date', array('label'=>'Date CDA : '))
            ->add('dateNotif', 'date', array('label'=>'Date Notif : '))
            ->add('nomEnsRef', 'text', array('label'=>'NomEnsRef : '))
            ->add('dateLimiteDecision', 'date', array('label'=>'Date Limite Decision : '))
            ->add('numDossMdph', 'text', array('label'=>'Num Doss Mdph : '))
            ->add('nomSuivi', 'text', array('label'=>'Nom Suivi : '))
            ->add('refEleve', 'choice', array('label'=>'Eleve : ', 'choices' => $personne))
            ->add('refMateriel',   'choice', array('label'=>'Materiel attribué : ', 'choices' => $materiel))
             // ->add('author',    'text')
             // ->add('published', 'checkbox')
             ->add('Enregistrer', 'submit')
          ;




return $formBuilder;


  }







}


?>