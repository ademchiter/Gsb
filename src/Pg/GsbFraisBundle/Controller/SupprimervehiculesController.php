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

class SupprimervehiculesController extends Controller
{
  public function indexAction()
    {
        $session= $this->container->get('request')->getSession();
        $login =  $session->get('login');
        $mdp =  $session->get('mdp');
        
        $pdo = $this->get('pg_gsb_frais.pdo');
         $ListeVehiculesVisiteurs= $pdo->getVehicules($login, $mdp);
     /* $refvisiteur = $ListeVehiculesVisiteurs['refvisiteur'];
       $immat = $ListeVehiculesVisiteurs['immat'];
       $marque = $ListeVehiculesVisiteurs['marque'];
       $couleur = $ListeVehiculesVisiteurs['couleur'];*/
            return $this->render('PgGsbFraisBundle:ListeVehicules:SupprimerVehicule.html.twig', array(
                    'ListeVehiculesVisiteurs'=>$ListeVehiculesVisiteurs));
            
        
        }


      public function supprimerlevehiculeAction()
    {


        // connexion à la BDD
       $pdo = $this->get('pg_gsb_frais.pdo');  
        $session= $this->container->get('request')->getSession();
        $login =  $session->get('login');
        $mdp =  $session->get('mdp');

           

    $temp1 = $session->get('temp2'); 
    $pseudo = $session->get('pseudonymes');

    //   $pseudo=$pdo->DetailsMaterielEleve();


    // if (empty($pseudo)) {
    //     $idMateriel = $pseudos[$temp1][0];
    // }
    // else{
    //     $idMateriel = $pseudo[$temp1][0];
    // }


        $ListeVehiculesVisiteurs= $pdo->getVehicules($login, $mdp);
        $idvehicule = $pseudo[$temp1][0];

        $supprimer= $pdo->supprimerVehicules($login, $mdp, $idvehicule);

        var_dump($idvehicule);
    //   if (!empty($pseudo)) {
    //     // ... perform some action, such as saving the task to the database

    //      return $this->redirect($this->generateUrl('materiel_prete'));
    // }
    // elseif (empty($pseudo))
    // {
    //     return $this->redirect($this->generateUrl('materiel_recherche'));
    // }
  


    }
  }