<?php
/**
 * Created by PhpStorm.
 * User: criss
 * Date: 07/02/17
 * Time: 15:10
 */

namespace FY\ValentineBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('baptismChoice', ChoiceType::class, array(
                'choices' => array(
                    'Vivre un baptême de chef' => 'baptism',
                    'Offrir un bon cadeau' => 'gift'
                ),
                'expanded' => true,
                'required' => true,
                'label' => 'Que souhaitez-vous ?',
                'attr' => array(
                    'id' => "test1"
                )
            ))
            ->add('firstName', TextType::class, array('label' => 'Prénom',
                'required' => true,
                'attr' => array(
                    'class' => 'validate',
                    'id' => 'first_name',
                )
            ))
            ->add('lastName', TextType::class, array('label' => 'Nom',
                'required' => true,
                'attr' => array(
                    'class' => 'validate',
                    'id' => 'last_name',
                )
            ))
            ->add('authorEmail', EmailType::class, array('label' => 'Adresse mail',
                'required' => true,
                'attr' => array(
                    'class' => 'validate',
                    'if' => 'email'
                )
            ))
            ->add('authorPhone', NumberType::class, array('label' => 'Numéro de téléphone',
                'required' => true,
                'attr' => array(
                    'class' => 'validate',
                    'id' => 'icon_telephone',
                )
            ))
            ->add('city', TextType::class, array('label' => 'Ville',
                'required' => true,
                'attr' => array(
                    'class' => 'validate',
                    'id' => 'city',
                )
            ))
            ->add('comment', TextareaType::class, array('label' => 'Un petit commentaire ?',
                'required' => true,
                'attr' => array(
                    'class' => 'materialize-textarea',
                    'id' => 'textarea1',
                )
            ))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

}