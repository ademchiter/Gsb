<?php
namespace Ia\GemahBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
//needed for constraints on form fields
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
 
//needed for events on form fields (onchange from region to locality)
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Form;
use Ia\GemahBundle\Model\Address;
 
class AddressForm extends AbstractType{
    protected $_data = array();
 
    public function __construct($params = array()){
        $this->_data = $params;
 
        return $this;
    }
 
    public function buildForm(FormBuilderInterface $builder, array $options){
        $regions = Address::getAllRegions();
        ksort($regions);
 
        //get localities for editing
        $localities = array();
        if(!empty($this->_data['region_id'])){
            $localities = Address::getLocalitiesByRegion($this->_data['region_id']);
        }
 
        $options =
            array(
                'region'
                    => array(
                            'label'             => 'County*',
                            'choices'           => $regions,
                            'data'              => !empty($this->_data['region_id'])?$this->_data['region_id']:0,
                            'empty_value'       => 'Pick a county',
                            'attr'              => array('style'=>'width:210px'),
                            'trim'              => true,
                            'required'          => false,
                            'constraints'       => array(new NotBlank(array('message'=>'Please pick a county!'))),
                            'invalid_message'   => 'Please pick a county!'
                            ),
                'locality'
                    => array(
                            'label'            => 'Locality*',
                            'choices'           => !empty($localities)?$localities:array(),
                            'data'              => !empty($this->_data['locality_id'])?$this->_data['locality_id']:0,
                            'empty_value'       => 'Pick a locality',
                            'required'          => false,
                            'attr'              => array(
                                                        'style'    =>'width:210px',
                                                        'disabled'  => !empty($this->_data['locality_id'])?false:true
                                                        ),
                            //'label_attr'        => array('style'=>'margin-left:30px;'),
                            'trim'              => true,
                            'constraints'       => array(new NotBlank(array('message'=>'Please pick a locality!'))),
                            'invalid_message'   => 'Please pick a locality!',
                            'auto_initialize'   => false
                            )
                );
 
        $builder->add('id', 'hidden', array('data'=>!empty($this->_data['id'])?$this->_data['id']:0));
 
        $builder->add('street_address',
                        'text',
                        array(
                            'label'             => 'Address*',
                            'attr'              => array(
                                                        'style'    => 'width:210px',
                                                        //this should customize HTML5 validation messages BUT is not working
                                                        'oninvalid'=> 'setCustomValidity("")',    
                                                        'onfocus'  => 'setCustomValidity("")'
                                                        ),
                            //default is required ==> force HTML5 validation by browsers
                            'required'          => true,  
                            'trim'              => true,
                            'data'              => !empty($this->_data['address'])?$this->_data['address']:'',
                            //needed to acces form errors in controller, for example (not to display them directly in Twig)
                            //'error_bubbling'    => true,   
                            'constraints'       => array(
                                                        new NotBlank(array('message'=>'Please fill the address!')),
                                                        new Length(
                                                                array(
                                                                    'min'      =>10,
                                                                    /*
													                  because in SF 2.2 is a BUG with this validator
													                  ==> tries to apply transChoice
													                 */
                                                                    'minMessage'=>'Please fill minimun %s characters!|Please fill minimun 10 characters!',
                                                                    'max'       =>200,
                                                                    'maxMessage'=>'Please fill maximum %s characters!|Please fill maximum 200 characters!'
                                                                    )),   
                                                    ),
                            'invalid_message'   => 'Please fill the address!'
                            )
                    );
 
        $builder->add('region', 'choice', $options['region']);
        $builder->add('locality', 'choice', $options['locality']);
         
        $extVaribles = array('factory'  => $builder->getFormFactory(),
                            'options'   => $options,
                            'self'      => $this);
        $regionModifier = function (FormInterface $form, $region) use (&$extVaribles){
            $regionData = !empty($extVaribles['options']['region']['data'])?$extVaribles['options']['region']['data']:$region;
            $extVaribles['options']['locality']['choices'] = $extVaribles['self']->getLocalities($regionData);
            $extVaribles['options']['region']['data']      = $regionData;
            unset($extVaribles['options']['locality']['attr']['disabled']);
 
            $form->add('locality', 'choice', $extVaribles['options']['locality']);
        };
 
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) use ($regionModifier){
                                                                $region = $event->getData();
                                                                $regionModifier($event->getForm(), $region);
                                                            });
        $builder->get('region')->addEventListener(FormEvents::POST_SUBMIT, function(FormEvent $event) use ($regionModifier){
                                                                $region = $event->getForm()->getData();
                                                                $regionModifier($event->getForm()->getParent(), $region);
                                                            });
 
        $builder->add('postcode', 'text', array('label'     => 'Zip code',
                                                'data'      => !empty($this->_data['zip_code'])?$this->_data['zip_code']:'',
                                                'attr'      => array('style'=>'width:210px !important;'),
                                                'required'  => false,
                                                'trim'      => true));
    }
 
    public function setDefaultOptions(OptionsResolverInterface $resolver){
        $resolver->setDefaults(array(
                                    /*
          default uses validation.langCode.xlf
          from /vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations
                                    */
                                    'translation_domain'   => 'messages', 
                                    /*
                                    NULL because I don't map a model class to this form to create the for based on that class,
                                    like you should do if yu use Doctrine ORM
                                    */
                                    'data_class'            => null,       
                                    'csrf_protection'       => true,
                                    'csrf_token_id'         => 'address'));
    }
    public function getLocalities($regionData){
    	return Address::getLocalitiesByRegion($regionData);
    }
 
    public function getName(){
        return 'address';
    }
}
?>