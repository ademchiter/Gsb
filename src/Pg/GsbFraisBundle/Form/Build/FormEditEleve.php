<?php 

namespace Ia\GemahBundle\Form\Build;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Ia\GemahBundle\Controller\EleveController;

class FormEditEleve extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
                // $formulaire = new EleveController();
                // $form = $formulaire->editEleveAction($info);

// $id = $info;
// var_dump($id);

        $builder
            ->add('nomEleves',      'text', array('label'=>'Nom de l\'élève : '))
            ->add('prenomEleves',     'text', array('label'=>'Prénom de l\'élève : '))
            ->add('dateNaissEleves',   'birthday', array('label'=>'Date de naissance: ', 'format' => 'dd MM yyyy'))
            ->add('save', 'submit')
        ;
    }

    public function getName()
    {
        return 'edit_eleve';
    }
}
?>