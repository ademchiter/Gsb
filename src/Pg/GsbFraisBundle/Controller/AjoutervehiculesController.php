<?php

namespace Pg\GsbFraisBundle\Controller;

require_once("include/fct.inc.php");
// require_once("include/class.pdogsb.inc.php");

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Pg\GsbFraisBundle\Entity\Advert;
use Pg\GsbFraisBundle\Form\FormulaireEleve;
use Pg\GsbFraisBundle\Form\Build\FormEleve;
// Use divers:
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse; 
use Symfony\Component\HttpFoundation\Response;
 
// use PdoGsb;

class AjoutervehiculesController extends Controller
{
   public function indexAction(Request $request)
    {


        $session= $this->container->get('request')->getSession();
        $login =  $session->get('login');
        $mdp =  $session->get('mdp');
         $pdo = $this->get('pg_gsb_frais.pdo');
        //Get et Set 
        $formulaire = new FormulaireEleve();

        $form = $this->createForm(new FormEleve(), $formulaire);

            //Récupération des données et insertion des valeurs dans la requête puis exécution de la requête sql 
            if ($this->get('request')->getMethod() == 'POST')
            {
                $form->bind($this->get('request'));

                $numImmat = $formulaire->getnumImmat();
                $marque = $formulaire->getmarque();
                $modele = $formulaire->getmodele();
                $couleur = $formulaire->getcouleur();
                $voiture = $pdo->addVoiture($numImmat, $marque, $modele, $couleur);

                // $eleve = $pdo->addEleves($nom, $prenom, $date, $codeINE, $classeEleve);

                          //Si tout les champs du formulaire sont valides redirection vers l'accueil
                // if ($form->isValid()) 
                // {
                //     return $this->redirect($this->generateUrl('ia_gemah_homepage'));
                // }
            }

        return $this->render('PgGsbFraisBundle:ListeVehicules:AjouterVehicule.html.twig', array('form' => $form->createView()));
    }
  }